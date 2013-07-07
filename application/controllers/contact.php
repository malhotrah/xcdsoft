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
        $data['contact']=true;
        $this->template->build('contact_us',$data);
    }
}