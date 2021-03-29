<?php

class Contact_model extends CI_Model
{
    /*Insert*/

    public function insert_contact($data)
    {
        if ($this->db->insert('contact', $data)) {
            return 1;
        } else {
            return 0;
        }
    }
}
