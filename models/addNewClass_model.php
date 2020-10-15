<?php

class addNewClass_Model extends Model{

    public function __construct(){
     	parent::__construct();
    }

    public function listHalls(){

    	return $this->db->listAll("hall");
        

    }

    public function listSubjects(){

        return $this->db->listAll("subject");
        

    }

    public function listCurrentSchedules($hallName,$daySelected){

        return $this->db->listAll("s.start_time,s.end_time,t.fname,t.mname,t.lname,sub.name,c.batch","schedule s,teacher t,subject sub,class c","s.class_id=c.id and c.teacher_reg_no=t.reg_no and c.subject_id=sub.id and s.hall_id=(select id from hall where name='$hallName') and s.day='$daySelected'");
        

    }

    public function getUser($id){

        return $this->db->listWhere('user',array('nic','first_name','last_name','gender','email','contact_no','user_status','user_type'),"nic='$id'");
    }

    public function create($data){

        $this->db->insert('user',array(
            'nic' => $data['nic'],
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'gender' => $data['gender'],
            'email' => $data['email'],
            'username' => $data['username'],
            'password' => $data['password'],
            'contact_no' => $data['contact_no'],
            'user_status' => $data['user_status'],
            'user_type' => $data['user_type']));


    }

    public function update($data){

        $this->db->update('user',array(
            'nic' => $data['nic'],
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'gender' => $data['gender'],
            'email' => $data['email'],
            'username' => $data['email'],
            'contact_no' => $data['contact_no'],
            'user_status' => $data['user_status'],
            'user_type' => $data['user_type']),"nic = '{$data['nic']}'");

    }

    public function delete($id){
        $data = $this->db->listWhere('user',array('user_type'),"nic='$id'");

        if($data['user_type']=='owner'){
            return false;
        } else{
            $this->db->delete('user',"nic='$id'");
        }

    }




}