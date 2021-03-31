<?php

class updateTeacher_model extends Model{

    public function __construct(){
     	parent::__construct();
    }

    public function listTeacher(){
        return $this->db->listWhere("*","teacher","deleted=0"); 
    }

    public function listTecDetails($userid){
        return $this->db->listWhere("*","teacher","user_id=$userid");
    }

    public function update($data,$userTec){
        return $this->db->update('teacher',"fname='".$data['fname']."',tel_no='".$data['tel_no']."',address='".$data['address']."',NIC='".$data['NIC']."',DOB='".$data['DOB']."',email='".$data['email']."',qualifications='".$data['qualification']."',acc_no=".$data['acc_no'].",bank_name='".$data['bank_name']."',branch_name='".$data['branch_name']."'","user_id=$userTec");

    }

    public function delete($userid){
        $this->db->update('user',"deleted=1","id=$userid");
        return $this->db->update('teacher',"deleted=1","user_id=$userid");
    }
}