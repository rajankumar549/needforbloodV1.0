<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class ajaxfunction extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }
    
//checking email is unique
    public function emailchecker(){
        $email=$this->input->post('email');
                $query="select * from `donor_registration` where email_id='".$email."'";
        $resul=$this->db->query($query);
        $response=array();
        if($count = $resul->num_rows()){
            $response['success']=0;
            $response['message']='email id alredy exist';

        }
        else{
 $response['success']=1;
            $response['message']='email id is unique';            
        }
        echo json_encode($response);
    }

    function getState($countryid){        
        $this->load->model('donormodel');
        $data=$this->donormodel->statedata($countryid);
        $response='<option value=0>Select district</option>';
        foreach ($data as $key) {
            $response.="<option value=".$key['id'].">  ".$key['name']."</option>";
        }
        echo json_encode($response);
    }
    function getCity(){
        $district_name=$this->input->post('district_name');
        $district_name=trim($district_name);
        $sql="SELECT DISTINCT(officename) FROM  pin_dir where Districtname='".$district_name."' and officename !='NA' ORDER BY officename ASC";
        $query=$this->db->query($sql);
        $data=$query->result_array();
        $response="<option value='Select City'>Select City</option>";
        foreach ($data as $value) {

            $response.="<option value=".$value['officename'].">  ".$value['officename']."</option>";
        }
        echo $response;
    }



    function getdistrict2(){
        $state_name=$this->input->post('state_name');
        $state_name=trim($state_name);
        $sql="SELECT DISTINCT(Districtname) FROM pin_dir where statename='".$state_name."'and Districtname !='NA' ORDER BY Districtname ASC";
        $query=$this->db->query($sql);
        $data=$query->result_array();
        $response="<option value='Select District'>Select District</option>";
        foreach ($data as $value) {

            $response.="<option value=".$value['Districtname'].">  ".$value['Districtname']."</option>";

        }
        echo $response;
    }



    function getlocality(){
    	$district_id=$this->input->post('district_id');
    	$sql="select id,city from city where district_id='".$district_id."'";
		$query=$this->db->query($sql);
		$data=$query->result_array();
		$response='<option value=0>Select city</option>';
		foreach ($data as $value) { 

			$response.="<option value=".$value['id'].">  ".$value['city']."</option>";

		}
		echo json_encode($response);

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
              'mobile_number'=>$this->input->post('mobile_number'),
              'landline'=>$this->input->post('mobile_number'),
              'status_of_availability'=>$this->input->post('status'),
              'country_id'=>$this->input->post('country'),
              'state_id'=>$this->input->post('state'),
              'district_id'=>$this->input->post('district'),
              'locality_id'=>$this->input->post('locality'),
            );
        $id=$this->donormodel->profilesave($donorprofile);
		$donordata = array();
                $donordata['name']      = $this->input->post('fullname');
                $donordata['email']     = $this->input->post('email');
                $donordata['password']  = $this->input->post('password');
                $payloadconfirmation = $this->load->view('email/confirmationtemplate',$donordata,TRUE);


                //$payloadotp          = $this->load->view('email/otptemplate',$donordata,TRUE);
                $this->coreemail($this->input->post('email'),"Welcome to the NeedForBlood",$payloadconfirmation,'');
                //$this->coreemail($this->input->post('student_email'),"One Time Password",$payloadotp,'');

                 $this->load->helper('url');
                 redirect(base_url());



    //$arr['page'] = 'donor';
        //$this->load->view('admin/donordata',$arr);
    }
    
function coreemail($to,$subject,$body,$attachmnt)
{
    $this->load->library('email');
    $this->email->set_mailtype("html");
    $this->email->from('support@needforblood.org', 'NeedForBlood');
    $this->email->to($to);
    $this->email->subject($subject);
    $this->email->message($body);
        $this->email->attach($attachmnt);
    if($this->email->send()){
        return 1;
    }
    else{
        return 0;
    }
}



}