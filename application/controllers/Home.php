<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		$this->load->view('home');
	}
	/*Register view page */
	public function register()
	{
		$this->load->view('register');
	}


	/*Insert register values in table*/
	public function insert()
	{

		$this->form_validation->set_rules('username','User name','required');
		$this->form_validation->set_rules('pwd','Password','required');
		$this->form_validation->set_rules('cpwd','Conform Password','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('phone_no','Contact Number','required');
		$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');

		if ($this->form_validation->run()) 
		{
			$data['username']= $this->input->post('username');
			$data['password']= sha1($this->input->post('pwd'));
			$data['conform_password']= sha1($this->input->post('cpwd'));
			$data['email']= $this->input->post('email');
			$data['phone_no']=$this->input->post('phone_no');
			$data['ref_pwd']= $this->input->post('pwd');
		
		

			$this->load->model('My_Model');
			if ($this->My_Model->insert_record($data))
			{
				$this->session->set_flashdata('message','Register Successfully...!');
				return redirect('Home/index');
			}
			else
			{
				$this->session->set_flashdata('message','Failed Register ...!');
				return redirect('register');
			}
		}
		else
		{
			$this->register();
		}
	}




/*Insert register values in table END*/

	/*Login view page */
	public function login()
	{
		if($this->session->userdata("id"))
		return redirect("home/dashboard");
		$this->load->view('login');
	}

/*Login captcha function*/
	public function signin ()
	{
		//$this->load->view('login');

		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('pwd','Password','required');

		$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');

		if ($this->form_validation->run()) 
		{
			//$data['username']= $this->input->post('username');
			$email= $this->input->post('email');
			$password= sha1($this->input->post('pwd'));
			$this->load->model('My_Model');
			$userExist = $this->My_Model->userExist($email,$password);

			//echo '<pre>';
			//print_r($userExist);
			//echo '</pre>';
			if ($userExist) 
			{
				$sessionData= [

				'id' => $userExist->id,
				'username' => $userExist->username,
				'email' => $userExist->email,
				];
				$this->session->set_userdata($sessionData);
				return redirect ('home/dashboard');
			}
			else
			{
				$this->session->set_flashdata('message','Email Or Password Incorrect');
				return redirect ('home/login');
			}

		}
		else
		{
			$this->login();
		}
	}



	public function dashboard()
	{
		if(!$this->session->userdata("id"))
		{
			//session code
			return redirect("home/dashboard");
		}
		$this->load->view('dashboard');
	}
	
		public function profile()
	{
		$this->load->view('profile');
	}


	public function logout()
	{
		$this->session->unset_userdata("id");
		return redirect ("home/login");
	}


}
