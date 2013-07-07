<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Anuj
 * Date: 7/6/13
 * Time: 2:32 PM
 * To change this template use File | Settings | File Templates.
 */
class Services extends CI_Controller
{

    function index()
    {
        $data['services']=true;
        $this->template->build('services',$data);
    }
}