<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class DonorManage extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
         if (!$this->session->userdata('is_admin_login')) {
            redirect('admin/home');
        }
    }
    public function index() {
        $arr['page'] = 'donor';
        $this->load->view('admin/viewdonor',$arr);
    }

    public function add_donor() {
        $arr['page'] = 'donor';
        $this->load->model('donormodel');
        $arr['state']=$this->donormodel->statedata();
        $this->load->view('admin/donordata',$arr);
    }

     public function savedonor() {
        $donorregistration=array(
            'name'=>$this->input->post('fullname'),
            'email_id'=>$this->input->post('email'),
            'password'=>$this->input->post('password'),
            'registration_date'=>date('y-m-d'),
            'status'=>$this->input->post('status')
            );
        $this->load->model('donormodel');
        $id=$this->donormodel->registerdonor($donorregistration);
        $donorprofile=array(
              'donor_id'=>$id,
              'name'=>$this->input->post('fullname'),
              'blood_group'=>$this->input->post('bloodgroup'),
              'date_of_birth'=>$this->input->post('dob'),
              'mobile_number'=>$this->input->post('contact'),
              'landline'=>$this->input->post('contact'),
              'status_of_availability'=>$this->input->post('status'),
              'country_id'=>$this->input->post('country'),
              'state_id'=>$this->input->post('state'),
              'district_id'=>$this->input->post('district'),
              'locality_id'=>$this->input->post('locality'),
              'update_at'=>'NOW()'
            );
        $id=$this->donormodel->profilesave($donorprofile);
        echo "success";



        //$arr['page'] = 'donor';
        //$this->load->view('admin/donordata',$arr);
    }
    
     public function block_donor() {
        // Code goes here
    }

     public function delete_donor() {
        // Code goes here
    }
    
    
    
    

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */