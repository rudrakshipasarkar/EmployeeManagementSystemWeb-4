<?php
class Hod_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_employees_for_verification()
    {
        $condition = array(
            'is_verified' => 0,
            'hod_id' => $this->session->userdata('user_id'),
            'role_id' => 1, //role id for employee
        );

        return $this->db->where($condition)->get('employees')->result_array();
    }

    public function get_employees($hod_id)
    {
        // Hod show can only verify employees under his department
        $condition = array(
            'hod_id' => $hod_id,
            'role_id' => 1, //role id for employee
        );

        return $this->db->where($condition)->get('employees')->result_array();
    }

    public function delete_employee($emp_id)
    {
        $this->db->where('sevarth_id', $emp_id)->delete('employees');
        $this->db->where('sevarth_id', $emp_id)->delete('training');
        $this->db->where('sevarth_id', $emp_id)->delete('applications');
        
    }

    public function get_employee_details($employee_id)
    {
        $condition = array(
            'sevarth_id' => $employee_id,
        );

        //check number of rows of employee
        if ($this->db->where($condition)->get('employees_details')->num_rows() > 0) {
            return array('result' => true,
                'data' => $this->db->where($condition)->get('employees_details')->result()[0],
            );
        }else{
            return array('result' => false,
            'error' => 'Employee Details Does Not Exists',
            
        );

        }

    }

    public function accept_employee_request($employee_id)
    {
        $condition = array('is_verified' => "1");
        $this->db->where("sevarth_id", $employee_id)->update('employees', $condition);
    }

    public function decline_employee_request($employee_id)
    {
        $condition = array('is_verified' => "-1");
        $this->db->where("sevarth_id", $employee_id)->update('employees', $condition);
    }

    public function get_applied_trainings($sevarth_id, $status){
        if($status == "-1"){
            return $this->db->where('hod_id', $sevarth_id)->get('training')->result_array();
        }else{
            $condition = array(
                'hod_id' => $sevarth_id,
                'training_status_id' => $status
            );

            return $this->db->where($condition)->get('training')->result_array();
        }
    }

    public function get_training_status(){
        return $this->db->get('training_status')->result_array();
    }

    public function get_training_by_id($training_id){
        return $this->db->where('id', $training_id)->get("training")->row_array();
    }

     public function accept_training_application($training_id){
        $this->db->where('id', $training_id)->update('training', ['training_status_id' => '3']);
    }   

    public function decline_training_application($training_id){
        $this->db->where('id', $training_id)->update('training', ['training_status_id' => '4']);
    }
}