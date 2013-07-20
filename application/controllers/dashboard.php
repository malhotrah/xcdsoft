<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Anuj
 * Date: 7/13/13
 * Time: 10:43 AM
 * To change this template use File | Settings | File Templates.
 */
class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        validate_login();
    }
    public function index()
    {
        $dashboard_model = new Dashboard_model();
        $result = $dashboard_model->get_data();
        $data['results'] = $result;
        $this->load->view('dashboard', $data);
    }

}