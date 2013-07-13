<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Anuj
 * Date: 7/13/13
 * Time: 10:48 AM
 * To change this template use File | Settings | File Templates.
 */
class Dashboard_model extends CI_Model
{
    function get_data()
    {
        $this->db->select('*');
        $result=$this->db->get('form_data')->result();
        return $result;

    }
}