<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Anuj
 * Date: 7/13/13
 * Time: 10:11 AM
 * To change this template use File | Settings | File Templates.
 */
class Form_model extends CI_Model
{

    function add_data($name, $mobile, $email, $message, $source)
    {
        try {
            $date = date('Y-m-d');
            $data = array(
                'name' => $name,
                'mobile' => $mobile,
                'email' => $email,
                'message' => $message,
                'source' => $source,
                'create_date' => $date
            );

            $this->db->insert('form_data', $data);
            return $this->db->insert_id();
        } catch (Exception $e) {
            return false;
        }

    }

}