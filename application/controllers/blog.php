<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Anuj
 * Date: 7/6/13
 * Time: 2:46 PM
 * To change this template use File | Settings | File Templates.
 */
class Blog extends CI_Controller{

    function index(){

        $data['blog']=true;
        $this->template->build('blog',$data);
    }
}