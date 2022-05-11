<?php
class Principle_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    // Principal can only verify employees and hod under his department
    public function get_hods_for_verification(){
        $role_id = array('1', '2');
        $condition = array(
            'is_verified' => 0,
            'principle_id' => $this->session->userdata('user_id'),
        );

        $this->db->where($condition);
        $this->db->where_in('role_id', $role_id);
        return $this->db->get('employees')->result_array();
    }
    
    public function get_training_status(){
        return $this->db->get('training_status')->result_array();
    }

    public function accept_hod_request($hod_id){
        $condition = array('is_verified' => "1");
        $this->db->where("sevarth_id", $hod_id)->update('employees', $condition);
    }
    
    public function decline_hod_request($hod_id){
        $condition = array('is_verified' => "-1");
        $this->db->where("sevarth_id", $hod_id)->update('employees', $condition);
    }

    public function get_employees($principle_id)
    {
        $role_id= array('1', '2');

        $this->db->where('principle_id', $principle_id);
        $this->db->where_in('role_id', $role_id);

        return $this->db->get('employees')->result_array();
    }

    public function delete_employee($emp_id)
    {
        $this->db->where('sevarth_id', $emp_id)->delete('employees');
        $this->db->where('sevarth_id', $emp_id)->delete('training');
        $this->db->where('sevarth_id', $emp_id)->delete('applications');

    }

    public function get_training_by_id($training_id){
        return $this->db->where('id', $training_id)->get("training")->row_array();
    }

     public function accept_training_application($training_id){
        $this->db->where('id', $training_id)->update('training', ['training_status_id' => '5']);
    }

    public function decline_training_application($training_id){
        $this->db->where('id', $training_id)->update('training', ['training_status_id' => '6']);
    }

    public function get_applied_trainings($sevarth_id, $status){
        if($status == "-1"){
            return $this->db->where('principal_id', $sevarth_id)->get('training')->result_array();
        }else{
            $condition = array(
                'principal_id' => $sevarth_id,
                'training_status_id' => $status
            );

            return $this->db->where($condition)->get('training')->result_array();
        }
    }
    
}