<?php

class Unitech_Clients_model extends CI_Model
{
    public function insertEntries($par)
    {
        if($this->db->insert('clients', $par))
        {
            return 1;
        }
        else{
            return 0;
        }
    }

    public function getEntries()
    {
        return $this->db->get('clients')->result();
    }

    public function delEntry($id)
    {
        $count=1;
        $this->db->where('sr_no', $id);
        if($this->db->delete('clients'))
        {
        return $count;
        }
        else{
            return $count = 0;
        }
    }


    function getEntry($id)
    {
        return $this->db->where('sr_no',$id)->get('clients')->row_array();
    }

    function update($id, $params)
    {
        $this->db->where('sr_no',$id);
        $this->db->update('clients',$params);
        return $count = 1;
    }

}