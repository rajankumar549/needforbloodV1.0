<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
/*
| -----------------------------------------------------
| PRODUCT NAME: 	Need For Help
| -----------------------------------------------------
| AUTHER:		SIDDHARTHA GUPTA
| -----------------------------------------------------
| EMAIL:		siddhartha@brownhubsolution.com
| -----------------------------------------------------
| COPYRIGHTS:		RESERVED BY SHRADHA JOHRI
| -----------------------------------------------------
| WEBSITE:		http://www.needforblood.org/dev     
| -----------------------------------------------------
| MODULE: 		Home
| -----------------------------------------------------
| This is home module controller file.
| -----------------------------------------------------
*/
	function __construct()
	{
		parent::__construct();
	}

	public function index() {
		$this->load->view('new/header-links');
		$this->load->view('new/header');
		$this->load->view('new/slider');
		$this->load->view('new/homepage_content');
		$this->load->view('new/footer');
	}

}

?>