<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Formcontroller extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('casmodel/formmodel');
    }

	public function index()
	{
		$this->load->view('Layouts/header');
		$this->load->view('casviews/formview');
		$this->load->view('Layouts/footer');
	}

	public function insert()
	{

		$this->form_validation->set_rules('Surname', 'Surname', 'required');
		$this->form_validation->set_rules('Firstname', 'Firstname', 'required');
		$this->form_validation->set_rules('Middlename', 'Middlename', 'required');
		$this->form_validation->set_rules('Email', 'Email', 'required');
		// $this->form_validation->set_rules('Phone', 'Phone', 'required');
		// $this->form_validation->set_rules('DOB', 'DOB', 'required');
		// $this->form_validation->set_rules('Age', 'Age', 'required');
		// $this->form_validation->set_rules('Gender', 'Gender', 'required');
		// $this->form_validation->set_rules('DOJ', 'DOJ', 'required');
		// $this->form_validation->set_rules('EmployeeCode', 'EmployeeCode', 'required');
		// $this->form_validation->set_rules('Branch', 'Branch', 'required');
		// $this->form_validation->set_rules('Address', 'Address', 'required');
		// $this->form_validation->set_rules('State', 'State', 'required');
		// $this->form_validation->set_rules('City', 'City', 'required');
		// $this->form_validation->set_rules('Taluka', 'Taluka', 'required');
		// $this->form_validation->set_rules('Village', 'Village', 'required');
		// $this->form_validation->set_rules('Pincode', 'Pincode', 'required');
		// $this->form_validation->set_rules('Probession', 'Probession', 'required');
		// $this->form_validation->set_rules('GRNo', 'GRNo', 'required');
		// $this->form_validation->set_rules('InstituteName', 'InstituteName', 'required');
		// $this->form_validation->set_rules('ServiceStartDate', 'ServiceStartDate', 'required');
		// $this->form_validation->set_rules('ServiceEndDate', 'ServiceEndDate', 'required');
		// $this->form_validation->set_rules('TrainingName', 'TrainingName', 'required');
		// $this->form_validation->set_rules('SponsoredBy', 'SponsoredBy', 'required');
		// $this->form_validation->set_rules('Type', 'Type', 'required');
		// $this->form_validation->set_rules('Duration', 'Duration', 'required');
		// $this->form_validation->set_rules('StartDate', 'StartDate', 'required');
		// $this->form_validation->set_rules('EndDate', 'EndDate', 'required');
		// $this->form_validation->set_rules('CRStartDate', 'CRStartDate', 'required');
		// $this->form_validation->set_rules('CREndDate', 'CREndDate', 'required');
		// $this->form_validation->set_rules('Grade', 'Grade', 'required');
		$this->form_validation->set_error_delimiters('<div class="text-danger"></div>');

		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png|pdf';
		$this->upload->initialize($config);
		if($this->form_validation->run() && $this->upload->do_upload('userfile'))
		{
			// $ori_filename = $_FILES['userfile']['name'];
			// $new_name = time()."".str_replace(' ','-',$ori_filename);
			
			// $config['file_name'] = $new_name;
			
			$post = $this->upload->data();

			$image_path = base_url("uploads/".$post['raw_name'].$post['file_ext']);

			$data = [
				'Surname' => $this->input->post('Surname'),
				'Firstname' => $this->input->post('Firstname'),
				'Middlename' => $this->input->post('Middlename'),
				'Email' => $this->input->post('Email'),
				'Phone' => $this->input->post('Phone'),
				'Designation' => $this->input->post('Designation'),
				'DOB' => $this->input->post('DOB'),
				'Age' => $this->input->post('Age'),
				'Gender' => $this->input->post('Gender'),
				'DOJ' => $this->input->post('DOJ'),
				'EmployeeCode' => $this->input->post('EmployeeCode'),
				'Branch' => $this->input->post('Branch'),
				'Address' => $this->input->post('Address'),
				'State' => $this->input->post('State'),
				'City' => $this->input->post('City'),
				'Taluka' => $this->input->post('Taluka'),
				'Village' => $this->input->post('Village'),
				'Pincode' => $this->input->post('Pincode'),
				'Probession' => $this->input->post('Probession'),
				'GRNo' => $this->input->post('GRNo'),
				'InstituteName' => $this->input->post('InstituteName'),
				'ServiceStartDate' => $this->input->post('ServiceStartDate'),
				'ServiceEndDate' => $this->input->post('ServiceEndDate'),
				'TrainingName' => $this->input->post('TrainingName'),
				'SponsoredBy' => $this->input->post('SponsoredBy'),
				'Type' => $this->input->post('Type'),
				'Duration' => $this->input->post('Duration'),
				'StartDate' => $this->input->post('StartDate'),
				'EndDate' => $this->input->post('EndDate'),
				'CRStartDate' => $this->input->post('CRStartDate'),
				'CREndDate' => $this->input->post('CREndDate'),
				'Grade' => $this->input->post('Grade'),
			];
			$data['Proof'] = $image_path;
			$this->formmodel->insertCas($data);
			$this->session->set_flashdata('status', 'Your form has been submitted successfully');
			$subject = 'Submitted';
			$message = 'Your form has been Successfully Submitted';
			$this->sendmail($data['Email'],$subject,$message);
			redirect(base_url('cascontroller/formcontroller/index'));
		}
		else
		{
			$upload_error = $this->upload->display_errors('<p>', '</p>');;
			$this->index();
		}
	}

	public function status()
	{
		$id = 1;
		$this->load->view('Layouts/header');
		$data['status'] = $this->formmodel->viewStatus($id);
		$this->load->view('casviews/status',$data);
		$this->load->view('Layouts/footer');
	}

	public function principal()
	{
		$this->load->view('Layouts/header');
		$data['applications'] = $this->formmodel->getData();
		$this->load->view('casviews/principalview',$data);
		$this->load->view('Layouts/footer');
	}

	public function dto()
	{
		$this->load->view('Layouts/header');

		$data['applications'] = $this->formmodel->getData();

		$this->load->view('casviews/dtoview',$data);
		$this->load->view('Layouts/footer');
	}

	public function jd()
	{
		$this->load->view('Layouts/header');

		$data['applications'] = $this->formmodel->getData();
		
		$this->load->view('casviews/jdview',$data);
		$this->load->view('Layouts/footer');
	}



	public function updateStatus($id,$emailId)
	{
		if(!$this->formmodel->status($id))
		{
			$subject = 'Approved and Forwarded';
			$message = 'Dear user , Your form has been successfully approved 
						by Principal and Forwarded to Director';
			$this->sendmail($emailId,$subject,$message);
			redirect(base_url('cascontroller/formcontroller/principal'));
		}		
	}

	public function updatedto($id,$emailId)
	{
		if(!$this->formmodel->statusdto($id))
		{
			$subject = 'Approved and Forwarded';
			$message = 'Dear user , Your form has been successfully approved 
						by Director and Forwarded to Joint Director';
			$this->sendmail($emailId,$subject,$message);
			redirect(base_url('cascontroller/formcontroller/dto'));
		}
	}

	public function updatejd($id,$emailId)
	{
		if(!$this->formmodel->statusjd($id))
		{
			$subject = 'Approved';
			$message = 'Dear user , Your form has been successfully approved by Director';
			$this->sendmail($emailId,$subject,$message);
			redirect(base_url('cascontroller/formcontroller/jd'));
		}
	}

	public function principalreject($id)
	{
		if(!$this->formmodel->rejectform($id))
		{
			redirect(base_url('cascontroller/formcontroller/principal'));
		}
	}

	public function dtoreject($id)
	{
		if(!$this->formmodel->rejectform($id))
		{
			redirect(base_url('cascontroller/formcontroller/dto'));
		}
	}

	public function jdreject($id)
	{
		if(!$this->formmodel->rejectform($id))
		{
			redirect(base_url('cascontroller/formcontroller/jd'));
		}
	}

	public function sendmail($emailId,$subject,$message)
	{
		$config = array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.gmail.com',
			'smtp_timeout' => 60,
			'smtp_port' => 465,
			'smtp_user' => 'codingems123@gmail.com',
			'smtp_pass' => 'Pass@123',
			'charset' => 'utf-8',
			'mailtype' => 'html',
			'newline' => "\r\n",
		);
		$this->email->initialize($config);
		$this->email->from('ems@gmail.com', 'CAS');
		$this->email->to($emailId);
		$this->email->subject($subject);
		$this->email->message($message);
		$this->email->send();
		// if($send)
		// {
		// 	echo "Success";
		// }
		// else
		// {
		// 	print_r($this->email->print_debugger());
		// }
	}

	public function viewDetails($id)
	{
		$data['view'] = $this->formmodel->viewForm($id);
		$this->load->view('casviews/principalviewForm',$data);
	}

	public function viewDetailsdto($id)
	{
		$data['view'] = $this->formmodel->viewForm($id);
		$this->load->view('casviews/dtoviewForm',$data);
	}

	public function viewDetailsjd($id)
	{
		$data['view'] = $this->formmodel->viewForm($id);
		$this->load->view('casviews/jdviewForm',$data);
	}

	public function revertPrincipal($id)
	{
		if(!$this->formmodel->revertChanges($id))
		{
			redirect(base_url('cascontroller/formcontroller/viewDetails/'.$id));
		}
	}

	public function revertDto($id)
	{
		if(!$this->formmodel->revertChangesDto($id))
		{
			redirect(base_url('cascontroller/formcontroller/viewDetailsdto/'.$id));
		}
	}

	public function revertJd($id)
	{
		if(!$this->formmodel->revertChangesJd($id))
		{
			redirect(base_url('cascontroller/formcontroller/viewDetailsjd/'.$id));
		}
	}

}