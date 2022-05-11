<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	public function index()
	{
		//if user is already login
        if ($this->session->userdata('user_id') != null) {

            //check if user is not verified
            if ($this->Auth_model->is_verified_user($this->session->userdata('user_id')) == false) {
                // $this->load->view("auth/wait_until_verify");
                $this->navigate_to_dashboards($this->session->userdata('role_id'));

            } else {
                $this->navigate_to_dashboards($this->session->userdata('role_id'));
            }

		}else{
			redirect('/login');

		}
	}
		

	public function navigate_to_dashboards($role_id)
    {
        if ($role_id == 1) {
            redirect('home/HomeController/employee');
        } else if ($role_id == 2) {
            redirect('home/HomeController/hod');
        } else if ($role_id == 3) {
            redirect('home/HomeController/principal');
        }

    }
	
}