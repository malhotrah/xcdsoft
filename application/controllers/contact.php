<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Anuj
 * Date: 7/6/13
 * Time: 12:59 PM
 * To change this template use File | Settings | File Templates.
 */
class Contact extends CI_Controller
{

    public function index()
    {
        $data['contact'] = true;
        $this->template->build('contact_us', $data);

    }

    public function post_data()
    {
        $this->load->helper('email');
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $mobile = $this->input->post('mobile');
        $message = $this->input->post('message');
        $source = $this->input->post('source');

        if (empty($email) || !valid_email($email)) {
            $data = array('status' => false, 'message' => 'Please enter an valid email Id');
            $this->output->set_content_type('application/json')
                ->set_output(json_encode($data));
            return;
        }
        $this->load->model('form_model');
        $form_model = new Form_model();
        $id = $form_model->add_data($name, $mobile, $email, $message, $source);

        $isMailSent = $this->send_email($email);
        if ($isMailSent || $id) {
            $data = array('status' => true, 'message' => 'Thank you for contacting us. We will get back to you as soon as possible');

        } else {
            $data = array('status' => false, 'message' => 'Internal Server Error');
        }
        $this->output->set_content_type('application/json')
            ->set_output(json_encode($data));


    }

    private function send_email($email)
    {
        try {
            $this->load->library('email');
            $this->email->from('no-reply@example.com', 'XCD Soft');
            $this->email->to($email);
            $this->email->subject('Email Test');
            $this->email->message('thank you');
            $this->email->send();
            return true;
        } catch (Exception $e) {
            return false;
        }

    }


}