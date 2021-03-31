<?php

class updateStudent_model extends Model{

    public function __construct(){
     	parent::__construct();
    }

    public function listStudent(){
        return $this->db->listWhere("*","student","deleted=0");
    }

    public function listStudentDetails($userid){
        return $this->db->listWhere("*","student","user_id=$userid");
    }

    public function update($data,$userStu){        
        $this->db->update('student',"fname='".$data['fname']."',tel_no=".$data['tel_no'].",address='".$data['address']."',school='".$data['school']."',grade='".$data['grade']."',stream='".$data['stream']."'","user_id=$userStu");       
        return $result;
    }

    public function delete($userid){
        $this->db->update('user',"deleted=1","id=$userid");
        return $this->db->update('student',"deleted=1","user_id=$userid");
    }
}