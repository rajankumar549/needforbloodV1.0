<?php

class Hello extends CI_Controller

{



	public function one($name)
	{

		$this->load->model('hello_model');

		$profile = $this->hello_model->getprofile('sh');

		


		$data = array("n" => $name);

		$data['profile'] = $profile;

	    $this->load->view('one', $data);


	}
	public function two()
	{
		$this->load->library('form_validation');

$this->form_validation->set_error_delimiters('<div class="error">', '</div>');

//Validating Name Field
$this->form_validation->set_rules('dname', 'Username', 'required|min_length[5]|max_length[15]');

//Validating Email Field
$this->form_validation->set_rules('demail', 'Email', 'required|valid_email');

//Validating Mobile no. Field
$this->form_validation->set_rules('dmobile', 'Mobile No.', 'required|regex_match[/^[0-9]{10}$/]');

//Validating Address Field
$this->form_validation->set_rules('daddress', 'Address', 'required|min_length[10]|max_length[50]');

if ($this->form_validation->run() == FALSE) {
$this->load->view('insert_view');
} else {
//Setting values for tabel columns
$data = array(
'Student_Name' => $this->input->post('dname'),
'Student_Email' => $this->input->post('demail'),
'Student_Mobile' => $this->input->post('dmobile'),
'Student_Address' => $this->input->post('daddress')
);
//Transfering data to Model
//$this->insert_model->form_insert($data);
$data['message'] = 'Data Inserted Successfully';
//Loading View
$this->load->view('insert_view', $data);
}

	}

	public function index()
	{
		echo 'this is my index';
		

	}
     

}