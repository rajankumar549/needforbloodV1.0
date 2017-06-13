<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
/*
| -----------------------------------------------------
| PRODUCT NAME: 	Need For Help
| -----------------------------------------------------
| AUTHER:		SHRADHA JOHRI
| -----------------------------------------------------
| EMAIL:		shradha@brownhubsolution.com
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
		
            $this->data['title']   = "Need For Help";
			$this->data['content'] = 'home/index';
            $this->load->model('search_data');
            $this->data['state']=$this->search_data->getState();
			$this->load->view('temp/home/templates/hometemplate', $this->data);
    	}
	public function about() {
		
        		$this->data['title']   = "About";
			$this->data['content'] = 'home/about';
			$this->load->view('temp/home/templates/hometemplate', $this->data);
    	}
	public function blog() {
		
        		$this->data['title']   = "Blog";
			$this->data['content'] = 'home/blog';
			$this->load->view('temp/home/templates/hometemplate', $this->data);
    	}
	public function category() {
		
        		$this->data['title']   = "Category";
			$this->data['content'] = 'home/category';
			$this->load->view('temp/home/templates/hometemplate', $this->data);
    	}
	public function contact() {
		
        		$this->data['title']   = "Contact";
			$this->data['content'] = 'home/contact';
			$this->data['result']="praveen";
			$this->load->view('temp/home/templates/hometemplate', $this->data);
    	}
	public function detail() {
		
        		$this->data['title']   = "Detail";
			$this->data['content'] = 'home/detail';
			$this->load->view('temp/home/templates/hometemplate', $this->data);
    	}
	public function faq() {
		
        		$this->data['title']   = "FAQ";
			$this->data['content'] = 'home/faq';
			$this->load->view('temp/home/templates/hometemplate', $this->data);
    	}
	public function text() {
		
        		$this->data['title']   = "Text";
			$this->data['content'] = 'home/text';
			$this->load->view('temp/home/templates/hometemplate', $this->data);
    	}
	public function post() {
		
        		$this->data['title']   = "Post";
			$this->data['content'] = 'home/post';
			$this->load->view('temp/home/templates/hometemplate', $this->data);
    	}
	public function packages() {
		
        		$this->data['title']   = "Packages";
			$this->data['content'] = 'home/packages';
			$this->load->view('temp/home/templates/hometemplate', $this->data);
    	}
	public function testimonials() {
		
        		$this->data['title']   = "Testimonials";
			$this->data['content'] = 'home/testimonials';
			$this->load->view('temp/home/templates/hometemplate', $this->data);
    	}
	public function client_applicants() {
		
        		$this->data['title']   = "Client Applicants";
			$this->data['content'] = 'home/client_applicants';
			$this->load->view('temp/home/templates/hometemplate', $this->data);
    	}
	public function client_dashboard() {
		
        		$this->data['title']   = "Client Dashboard";
			$this->data['content'] = 'home/client_dashboard';
			$this->load->view('temp/home/templates/hometemplate', $this->data);
    	}
	public function client_job() {
		
        		$this->data['title']   = "Client Job";
			$this->data['content'] = 'home/client_job';
			$this->load->view('temp/home/templates/hometemplate', $this->data);
    	}
	public function client_register() {
		
        		$this->data['title']   = "Client Register";
			$this->data['content'] = 'home/client_register';
			$this->load->view('temp/home/templates/hometemplate', $this->data);
    	}
     public function do_login() 
     {

        if ($this->session->userdata('is_client_login')) 
	{
            redirect('home/loggedin');
        }else 
	{
            $user = $_POST['username'];
            $password = $_POST['password'];

            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');

            if ($this->form_validation->run() == FALSE) 
	    {
	 	/*
		 * Code By Abhishek R. Kaushik
		 * Sr. Software Developer 
		 */
                $this->load->view('login');
            }else{
		        $sql = "SELECT * FROM users WHERE user_name = '" . $user . "' AND user_hash = '" . md5($password) . "'";
		        $val = $this->db->query($sql);

		        if ($val->num_rows) 
			{
		            foreach ($val->result_array() as $recs => $res) 
			    {
		                $this->session->set_userdata(array(
		                    'id' => $res['id'],
		                    'user_name' => $res['user_name'],
		                    'email' => $res['email'],                            
		                    'is_client_login' => true
		                        )
		                );
		            }
                    		redirect('calls/call');
		        } else 
			{
		            $err['error'] = 'Username or Password incorrect';
		            $this->load->view('login', $err);
		        }
            }
        }
     }
    public function logout() 
    {
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('title');
        $this->session->unset_userdata('ag_country');
        
        $this->session->unset_userdata('is_client_login');
        $this->session->sess_destroy();
        $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
        $this->output->set_header("Pragma: no-cache");
        redirect('home', 'refresh');
    }
	
	
	
	///search controller
	
	public function find_donor() {
		
            $this->data['title']   = "Find Donor";
			$this->data['content'] = 'home/find_donor';
			$this->load->view('temp/home/templates/hometemplate', $this->data);
			
    	}


}
