<?php

if ( ! defined('BASEPATH') ) exit('No direct script access allowed');

class Hello_model extends CI_Model {


	public function getprofile($name)
	{
		return array("fullName" => "Shubham Saxena", "age " => 20); 
	}


 

}