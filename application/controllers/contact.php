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
        if (empty($source)) {
            echo "error";
            exit;
        }
        if ($source == 'footer' || $source == 'Footer') {
            if (empty($name)) {
                echo "error";
                exit;
            }
            if (!valid_email($email)) {
                echo 'invalid_email';
                exit;
            }
            $this->load->model('form_model');
            $form_model = new Form_model();
            $form_model->add_data($name, $mobile, $email, $message, $source);
            $this->send_email($email);
            echo "success";
            exit;
        }

        if ($source == 'contact' || $source == 'Contact') {
            if (empty($name) || empty($email) || empty($mobile)) {
                echo "error";
                exit;
            }
            if (!valid_email($email)) {
                echo 'invalid_email';
                exit;
            }
            $this->load->model('form_model');
            $form_model = new Form_model();
            $form_model->add_data($name, $mobile, $email, $message, $source);
            $this->send_email($email);
            echo "success";
            exit;
        }
    }

    public function send_email($email)
    {
        try {
            $this->load->library('email');
            $this->email->from('no-reply@example.com', 'XCD Soft');
            $this->email->to($email);
            $this->email->subject('Email Test');
            $this->email->message('thank you');
            $this->email->send();
        } catch (Exception $e) {
            return true;
        }

    }


}