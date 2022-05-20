<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HodController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct(); //important to call parent constructor
        $this->load->model('Hod_model');
        $this->load->model('Employee_model');
        $this->load->library("Fpdf");
       


    }
    public function index()
    {
        
        

        
        // echo "Hello";
        $dept = $this->session->userdata('dept_id');
        $data['dept'] = $dept;
        
        //get session of user
        $current_user_id = $this->session->userdata('user_id');

        $current_user = $this->Auth_model->get_employee_by_id($current_user_id);

        $department = $this->Employee_model->get_department_by_id($current_user['dept_id']);
        $organization = $this->Employee_model->get_organization_by_id($current_user['org_id']);

        $data['current_user'] = $current_user;
        $data['department'] = $department['dept_name'];
        $data['organization'] = $organization['org_name'];

        
        
        $this->load->view('templates/header.php');
        $this->load->view('templates/navbar.php');
        $this->load->view('dashboard/hod/hod_sidebar.php');
        $this->load->view('dashboard/hod/hod_dashboard.php', $data);
        $this->load->view('templates/footer.php');

    }

    public function employee_details($employee){
        $employee_response = $this->Hod_model->get_employee_details($employee);

        if($employee_response['result'] == true){
            $this->load->view('templates/header.php');
            $this->load->view('templates/navbar.php');
            $this->load->view('templates/sidebar.php');
            $this->load->view("dashboard/hod/employee_details.php", array('employee' => $employee_response['data']));
        }
        else{
            // set flash data
            $this->session->set_flashdata('failure', $employee_response['error']);
            redirect('/Hod/HodController/show_employees');
        }

        
       
    }

    public function apply_training()
    {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('organization_name', 'Organization Name', 'required');
        $this->form_validation->set_rules('organized_by', 'Organized By', 'required');
        $this->form_validation->set_rules('duration', 'Duration', 'required');
        $this->form_validation->set_rules('start_date', 'Start Date', 'required');
        $this->form_validation->set_rules('end_date', 'End Date', 'required');

        if ($this->form_validation->run() == false) {

            $training_types = $this->Employee_model->getTrainingTypes();

            $this->load->view('templates/header.php');
            $this->load->view('templates/navbar.php');
            $this->load->view('dashboard/hod/hod_sidebar.php');
            $this->load->view('dashboard/hod/apply_training.php', ['training_types' => $training_types]);
            $this->load->view('templates/footer.php');
        } else {

            $training_types = $this->Employee_model->getTrainingTypes();

            $config = array(
                'upload_path' => "uploads/apply_trainings", //path for upload
                'allowed_types' => "*", //restrict extension
                'max_size' => '300000',
                'max_width' => '30000',
                'max_height' => '30000',
            );
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('pdf')) {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('failure', $error);

                $this->load->view('templates/header.php');
                $this->load->view('templates/navbar.php');
                $this->load->view('dashboard/hod/hod_sidebar.php');
                $this->load->view('dashboard/hod/apply_training.php', ['training_types' => $training_types]);
                $this->load->view('templates/footer.php');

            } else {

                $name = $this->input->post('name');
                $organization_name = $this->input->post('organization_name');
                $organization_by = $this->input->post('organized_by');
                $duration = $this->input->post('duration');
                $start_date = $this->input->post('start_date');
                $end_date = $this->input->post('end_date');
                $training_type = $this->input->post('training_type');
                $pdf = $this->upload->data('file_name');

                if ($end_date < $start_date) {
                    $this->session->set_flashdata('failure', 'Start Date should be less than End Date');
                    $this->load->view('templates/header.php');
                    $this->load->view('templates/navbar.php');
                    $this->load->view('dashboard/hod/hod_sidebar.php');
                    $this->load->view('dashboard/hod/apply_training.php', ['training_types' => $training_types]);
                    $this->load->view('templates/footer.php');

                }else{

                    //get current user
                    $sevarth_id = $this->session->userdata('user_id');
                    $user = $this->Auth_model->get_employee_by_id($sevarth_id);
                    $array_start_date = explode('-', $start_date);
                    $array_end_date = explode('-', $end_date);

                    $data = array(
                        'sevarth_id' => $sevarth_id,
                        'name' => $name,
                        'org_name' => $organization_name,
                        'organized_by' => $organization_by,
                        'duration' => $duration,
                        'start_date' => $array_start_date[2] . "-" . $array_start_date[1] . "-" . $array_start_date[0],
                        'end_date' => $array_end_date[2] . "-" . $array_end_date[1] . "-" . $array_end_date[0],
                        'training_type' => $training_type,
                        'apply_letter' => $pdf,
                        'hod_id' => $user['hod_id'],
                        'principal_id' => $user['principle_id'],
                        'training_status_id' => 2, // as hod is applying training so status is 2
                    );

                    if ($this->Employee_model->insert_training($data)) {
                        $this->session->set_flashdata('success', 'Training Applied Successfully');
                        redirect('Hod/HodController/index');
                    } else {
                        $this->session->set_flashdata('failure', 'Unable to Apply Training');
                        redirect('Hod/HodController/apply_training');
                    }

                    
                    
                }


                

            }

        }

    }

    public function show_verifications(){
        $employee_for_verification_from_hod = $this->Hod_model->get_employees_for_verification();
        

        $this->load->view('templates/header.php');
        $this->load->view('templates/navbar.php');
        $this->load->view('dashboard/hod/hod_sidebar.php');
        $this->load->view("dashboard/hod/show_verifications.php", array('employee_for_verification_from_hod' => $employee_for_verification_from_hod));

       
    }

    public function delete_employee($employee_id){

        $this->Hod_model->delete_employee($employee_id);
        redirect('Hod/HodController/show_employees');
    }
     
    public function show_employees(){
        $sevarth_id = $this->session->userdata('user_id');
        $employees = $this->Hod_model->get_employees($sevarth_id);

        $this->load->view('templates/header.php');
        $this->load->view('templates/navbar.php');
        $this->load->view('dashboard/hod/hod_sidebar.php');
        $this->load->view("dashboard/hod/show_employees.php", array('employees' => $employees));
    }

    public function accept_employee_request($employee_id){
        $this->Hod_model->accept_employee_request($employee_id);
        // set flash data   
        $this->session->set_flashdata('success', 'Employee Request Accepted');
        redirect("/Hod/HodController/show_verifications");
        
    }
    
    public function decline_employee_request($employee_id){
        $this->Hod_model->decline_employee_request($employee_id);
        $this->session->set_flashdata('failure', 'Employee Request Declined');

        redirect("/Hod/HodController/show_verifications");
        
    }

    public function show_applied_trainings(){
        $sevarth_id = $this->session->userdata('user_id');
        
        $status = $this->input->post('status');

        if($status == null){
            $status = -1;
        }

        $applied_trainings = $this->Hod_model->get_applied_trainings($sevarth_id, $status);
        $training_status = $this->Hod_model->get_training_status();

        // print_r($applied_trainings);

        $this->load->view('templates/header.php');
        $this->load->view('templates/navbar.php');
        $this->load->view('dashboard/hod/hod_sidebar.php');
        $this->load->view("dashboard/hod/show_applied_trainings.php", array('trainings' => $applied_trainings, 'trainingstatus' => $training_status));

    }

    public function accept_training_application($training_id){
        $training = $this->Hod_model->get_training_by_id($training_id); 

        //check all conditions
        if($training['training_status_id'] == 1){
            $this->session->set_flashdata('success', 'Application Accepted Successfully');
            $this->Hod_model->accept_training_application($training_id);
        }else if($training['training_status_id'] == 2){
            $this->session->set_flashdata('success', 'Training is Already Applied To Principal');
        }else if($training['training_status_id'] == 3){
            $this->session->set_flashdata('success', 'Training is Already Approved By HOD');
        }else if($training['training_status_id'] == 4){
            $this->session->set_flashdata('failure', 'Training is Already Declined BY HOD');
        }else if($training['training_status_id'] == 5){
            $this->session->set_flashdata('success', 'Training is Already Approved By Principal');
        }else if($training['training_status_id'] == 6){
            $this->session->set_flashdata('failure', 'Training is Already Declined By Principal');
        }else{
            $this->session->set_flashdata('success', 'Training is Already Completed');
        }

        redirect("/Hod/HodController/show_applied_trainings");
    }
    
    public function decline_training_application($training_id){
        $training = $this->Hod_model->get_training_by_id($training_id); 

        //check all conditions
        if($training['training_status_id'] == 1){
            $this->session->set_flashdata('success', 'Application Decline Successfully');
            $this->Hod_model->decline_training_application($training_id);
        }else if($training['training_status_id'] == 2){
            $this->session->set_flashdata('success', 'Training is Already Applied To Principal');
        }else if($training['training_status_id'] == 3){
            $this->session->set_flashdata('success', 'Training is Already Approved By HOD');
        }else if($training['training_status_id'] == 4){
            $this->session->set_flashdata('failure', 'Training is Already Declined BY HOD');
        }else if($training['training_status_id'] == 5){
            $this->session->set_flashdata('success', 'Training is Already Approved By Principal');
        }else if($training['training_status_id'] == 6){
            $this->session->set_flashdata('failure', 'Training is Already Declined By Principal');
        }else{
            $this->session->set_flashdata('success', 'Training is Already Completed');
        }

        redirect("/Hod/HodController/show_applied_trainings");
    }


    // Colored table
    function FancyTable($header, $data, $pdf)
    {
        // Colors, line width and bold font
        $pdf->SetFillColor(255, 0, 0);
        $pdf->SetTextColor(255);
        $pdf->SetDrawColor(128,0,0);
        $pdf->SetLineWidth(.10);
        $pdf->SetFont('','B');
       
        // Header
        $w = array(50, 30, 20, 30, 30, 40, 50, 30);
        for($i=0; $i<count($header); $i++)
            $pdf->Cell($w[$i], 7, $header[$i], 1, 0, 'C', true);
        $pdf->Ln();
        
        // Color and font restoration
        $pdf->SetFillColor(224, 235, 255);
        $pdf->SetTextColor(0);
        $pdf->SetFont('');
        
        // Data
        $fill = false;
        foreach($data as $row)
        {
            $pdf->Cell($w[0], 6, $row['name'], 'LR', 0, 'L', $fill);
            $pdf->Cell($w[1], 6, $row['sevarth_id'], 'LR', 0, 'L',  $fill);
            $pdf->Cell($w[2], 6, $row['duration'], 'LR', 0, 'L', $fill);
            $pdf->Cell($w[3], 6, $row['start_date'], 'LR', 0, 'L', $fill);
            $pdf->Cell($w[4], 6, $row['end_date'], 'LR', 0, 'L', $fill);
            $pdf->Cell($w[5], 6, $this->getTrainingStatus($row['training_status_id']), 'LR', 0, 'L', $fill);
            $pdf->Cell($w[6], 6, $row['org_name'], 'LR', 0, 'L', $fill);
            
            $pdf->Ln();
            $fill = !$fill;
        }
        // Closing line
        $pdf->Cell(30*7, 0, '', 'T');
    }

    public function getTrainingStatus($status_id){
        if($status_id == 1){
            return "Applied To HOD";
        }else if($status_id == 2){
            return "Applied To Principal";
        }else if($status_id == 3){
            return "Approved By HOD";
        }else if($status_id == 4){
            return "Declined By HOD";
        }else if($status_id == 5){
            return "Approved By Principal";
        }else if($status_id == 6){
            return "Declined By Principal";
        }else{
            return "Completed";
        }

    }

    public function generate_pdf(){
        
        $sevarth_id = $this->session->userdata('user_id');
        $status_id = $this->input->post('status');
        
       
        $training = $this->Hod_model->get_applied_trainings($sevarth_id, $status_id);

        
        
        $pdf = new FPDF('P', 'mm', array(300, 350));

        // Column headings
        $header = array('Training Name', 'Sevarth ID', 'Duration', 'Start Date', 'End Date', 'Status', 'Organization');
        // Data loading
        
        $pdf->SetFont('Arial', '', 9);
        $pdf->AddPage();
        $this->FancyTable($header, $training, $pdf);
        $pdf->AddPage();
        $pdf->Output();

                    
                    
        
                                  
    }

    public function generate_single_pdf($training_id){
        $training = $this->Hod_model->get_training_by_id($training_id);

        $pdf = new FPDF();
        $pdf->AddPage();
        $pdf->SetFont('Arial', 'B', 16);

        $pdf->Cell(0, 10, 'Training Details', 0, 1, 'C');

        $pdf->SetFont('Arial', '', 12);
        
        $pdf->Ln();
        $pdf->Ln();
        $pdf->Ln();
        
        $pdf->Cell(40, 10, 'Training Name: '.$training['name']);
        $pdf->Ln();
        $pdf->Cell(50, 10, 'Sevarth: ID'. $training['sevarth_id']);
        $pdf->Ln();
        $pdf->Cell(60, 10, 'Duration: '.$training['duration']);
        $pdf->Ln();
        $pdf->Cell(70, 10, 'Start Date: '.$training['start_date']);
        $pdf->Ln();
        $pdf->Cell(80, 10, 'End Date: '.$training['end_date']);
        $pdf->Ln();
        $pdf->Cell(90, 10, 'Status: '.$this->getTrainingStatus($training['training_status_id']));
        $pdf->Ln();
        $pdf->Cell(100, 10, 'Organization: '.$training['org_name']);
        

        $pdf->Output();

    }
}

    


	

// 1
// APPLIED TO HOD
	

// 2
// APPLIED TO PRINCIPLE
	

// 3
// APPROVED BY HOD
	

// 4
// DECLINE BY HOD
	

// 5
// APPROVED BY PRINCIPAL
	

// 6
// DECLINED BY PRINCIPLE
	

// 7
// COMPLETED