<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DirectorController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct(); //important to call parent constructor
       
        $this->load->model('Director_model');
    }
    public function index()
    {
        // echo "Hello";
        $this->load->view('templates/header.php');
        $this->load->view('templates/navbar.php');
        $this->load->view('templates/sidebar.php');
        $this->load->view('dashboard/director_dashboard.php');
        $this->load->view('templates/footer.php');
    }

    

    public function show_verifications(){
        $employee_for_verification_from_hod = $this->Director_model->get_employees_for_verification();


        $this->load->view('templates/header.php');
        $this->load->view('templates/navbar.php');
        $this->load->view('dashboard/director/director_sidebar.php');
        $this->load->view("dashboard/director/show_verifications.php", array('employee_for_verification_from_hod' => $employee_for_verification_from_hod));

       
    }

    public function delete_employee($employee_id){
        $this->Hod_model->delete_employee($employee_id);
        redirect('Director/DirectorController/show_employees');
    }
     
    public function show_employees(){
        $sevarth_id = $this->session->userdata('user_id');
        $employees = $this->Director_model->get_employees($sevarth_id);

        $this->load->view('templates/header.php');
        $this->load->view('templates/navbar.php');
        $this->load->view('dashboard/director/director_sidebar.php');
        $this->load->view("dashboard/director/show_employees.php", array('employees' => $employees));
    }

}