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
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $mobile = $this->input->post('mobile');
        $messsage = $this->input->post('message');
        $source = $this->input->post('source');

        $this->load->model('form_model');
        $form_model = new Form_model();
        $form_model->add_data($name, $mobile, $email, $messsage, $source);
        $this->send_email($email);

    }

    public function send_email($email)
    {
        $this->load->library('email');
        $this->email->from('no-reply@example.com', 'XCD Soft');
        $this->email->to($email);
        $this->email->subject('Email Test');
        $this->email->message('thank you');
        $this->email->send();
       

    }


}