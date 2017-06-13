<?php
if ( ! defined('BASEPATH') ) exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Rajan_Kumar
 * Date: 12-06-2017
 * Time: 09:25
 */
class search_data extends CI_Model
{
    function getState(){
        $sql = "SELECT DISTINCT(statename) FROM pin_dir where statename != 'statename' ORDER BY statename ASC  ";
        $query=$this->db->query($sql);
        $data=$query->result_array();
        $state="<option value='Select State'>Select State</option>";
        foreach ($data as $key) {
            $state.="<option value=".$key['statename'].">  ".$key['statename']."</option>";
        }
        return $state;
    }
}