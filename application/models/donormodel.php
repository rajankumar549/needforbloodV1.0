<?php

if ( ! defined('BASEPATH') ) exit('No direct script access allowed');

class donormodel extends CI_Model {


    public function registerdonor($data=array())
    {

        $this->db->insert('donor_registration',$data);
        return $this->db->insert_id();
    }
    public function profilesave($data=array()){
        $this->db->insert('donor_data',$data);
        return $this->db->insert_id();

    }
    public function statedata(){
        $sql="select * from states";
        $query=$this->db->query($sql);
        return $query->result_array();
        //return $query = $this->db->get('states');
    }


}