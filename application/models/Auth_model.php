<?php
class Auth_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function create($loginArray)
    {

        $this->db->insert('employees', $loginArray);

        // if a user created account successfully
        return $this->db->insert_id();

    }

    public function getOrganization()
    {
        $query = "SELECT * FROM organization";
        $events = $this->db->query($query)->result_array();
        return $events;
    }

    public function get_hod($org_id, $dept_id)
    {
        $cond_hod = array(
            'org_id' => $org_id,
            'dept_id' => $dept_id,
            'is_verified' => 1,
            'role_id' => 2, // role_id 2 is id for hod
        );

        //if hod is exists and verified
        if ($this->db->where($cond_hod)->get('employees')->num_rows() > 0) {
            $hod = $this->db->where($cond_hod)->get('employees')->result()[0];
            return array(
                'result' => true,
                'id' => $hod->sevarth_id,
            );
        } else {
            //if hod and principle are not register then show error msg
            return array(
                'result' => false,
                'error' => "Contact your Hod to register",
            );
        }

    }

    public function get_principle($org_id)
    {
        $cond_principle = array(
            'org_id' => $org_id,
            'is_verified' => 1,
            'role_id' => 3, // role_id 2 is id for principle
        );

        if ($this->db->where($cond_principle)->get('employees')->num_rows() > 0) {
            $principle = $this->db->where($cond_principle)->get('employees')->result()[0];
            return array(
                'result' => true,
                'id' => $principle->sevarth_id,
            );
        } else {
            //if hod and principle are not register then show error msg
            return array(
                'result' => true,
                'id' => "-1",
            );
        }

    }
    public function get_director($org_id)
    {
        $cond_director = array(
            'org_id' => $org_id,
            'is_verified' => 1,
            'role_id' => 6, // role_id 6 is id for director
        );

        if ($this->db->where($cond_director)->get('employees')->num_rows() > 0) {
            $director = $this->db->where($cond_director)->get('employees')->result()[0];
            return array(
                'result' => true,
                'id' => $director->sevarth_id,
            );
        }
         else {
            //if hod and director are not register then show error msg
            return array(
                'result' => true,
                'id' => "-1",
            );
        }

    }

    public function getDepartment()
    {
        $query = "SELECT * FROM departments";
        $dept = $this->db->query($query)->result_array();
        return $dept;
    }

    public function getRole()
    {
        $query = "SELECT * FROM role";
        $role = $this->db->query($query)->result_array();
        return $role;
    }

    public function addDetails($formArray, $role_id)
    {
        
        $this->db->insert('employees_details', $formArray, $role_id);
        
        if ($role_id == 1) {
            redirect('home/HomeController/employee');
        } else if ($role_id == 2) {
            redirect('home/HomeController/hod');
        } else if ($role_id == 3) {
            redirect('home/HomeController/principal');
        }

        // if a user created account successfully
        return $this->db->insert_id();
    }

    public function check_auth_key($auth_key){
        return $this->db->where('value', $auth_key)->get('auth_key')->num_rows() > 0;
    }

    public function is_details_filled($sevarth_id){
        return $this->db->where('sevarth_id', $sevarth_id)->get('employees_details')->num_rows() > 0;
    }

    public function get_employee_details($sevarth_id){
        
        return $this->db->where('sevarth_id', $sevarth_id)->get('employees_details')->result()[0];
       
    }
    
    public function editDetails($formArray, $sevarth_id)
    {

        $this->db->where("sevarth_id", $sevarth_id)->update('employees_details', $formArray);
        return $this->db->affected_rows();
    }

    public function verify_email_id($sevarth_id){
        $condition = array('is_verified' => "1");
        $this->db->where("sevarth_id", $sevarth_id)->update('employees', $condition);

        $user = $this->db->where("sevarth_id", $sevarth_id)->get('employees')->result()[0];
        return $user;
    }

    //return true if sevarth id is already present in database employees
    public function is_sevarth_id_exists($sevarth_id)
    {
        return $this->db->where("sevarth_id", $sevarth_id)->get("employees")->num_rows() > 0;
    }

    public function get_user_by_id($sevarth_id)
    {
        return $this->db->where("sevarth_id", $sevarth_id)->get("employees")->result_array()[0];
    }
    public function check_email($email)
    {
        $query = $this->db->query("select * from employees where email= '$email'");
        $row = $query->num_rows();
        $email_query = $query->result_array();

        if ($row > 0) {
            
            return $email_query;
        } else {

            echo "<script>alert('Email not matched')</script>";
        }

    }

    public function get_employee_by_id($employee_id){
        return $this->db->where("sevarth_id", $employee_id)->get("employees")->result_array()[0];
    }

    public function login_user($email, $password)
    {
        //if email id not present in database
        if ($this->db->where('email', $email)->get("employees")->num_rows() == 0) {
            return array(
                'result' => false,
                'error' => "email id does not exist",
            );

        }

        

        //if user with email exists in database
        //get that use
        //check user entered password with password already set in db
        $user = $this->db->where('email', $email)->get("employees")->result()[0];
        $sevarth_id = $user->sevarth_id;

        // if ($this->db->where('sevarth_id', $sevarth_id)->get("employees_sevarth_id")->num_rows() > 0) {
        //     return array(
        //         'result' => false,
        //         'error' => "email id does not exist",
        //     );

        // }

        if ($user->password != $password) {
            return array(
                'result' => false,
                'error' => "Password Does not match",
            );
        }

        return array(
            'result' => true,
            'user' => $user,
        );

    }

    public function check_answer($email, $answer)
    {
        $condition = array(
            "email" => $email,
            "hint_answer" => $answer,
        );
        return $this->db->where($condition)->get("employees")->num_rows() > 0;
    }

    public function check_password($email, $password)
    {
        $condition = array(
            "password" => $password,
        );
       
        $this->db->where("email", $email)->update('employees', $condition);
        
        $this->session->set_flashdata('success', 'Password Changed Successfully');
        redirect('/login');
        
    }

    public function get_employee($email)
    {
        return $this->db->where("email", $email)->get("employees")->result()[0];
    }

    public function is_email_exist($email)
    {
        return $this->db->where("email", $email)->get("employees")->num_rows() > 0;
    }

    //return true is user is verified else false
    public function is_verified_user($sevarth_id)
    {
        $user = $this->db->where('sevarth_id', $sevarth_id)->get('employees')->result()[0];
        return $user->is_verified == 1;
    }
}