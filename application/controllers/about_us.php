<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Anuj
 * Date: 7/6/13
 * Time: 1:26 PM
 * To change this template use File | Settings | File Templates.
 */
class About_us extends CI_Controller
{

    function index()
    {
        $data['about']=true;
        $this->template->build('about_us',$data);
    }

}