<?php

class updateTeacher_model extends Model{

    public function __construct(){
     	parent::__construct();
    }

    public function listTeacher(){
        return $this->db->listAll("teacher"); 
    }

    public function listTecDetails($userid){
        return $this->db->listWhere("*","teacher","user_id=$userid");
    }

    public function update($data,$userTec){
        $this->db->update('teacher',"fname='".$data['fname']."',tel_no=".$data['tel_no'].",address='".$data['address']."',NIC='".$data['NIC']."',DOB='".$data['DOB']."',email='".$data['email']."',qualificatin=".$data['qualification'].",subject_id='".$data['subject_id']."',acc_no=".$data['acc_no'].",bank_name='".$data['bank_name']."',branch_name='".$data['branch_name']."'","user_id=$userTec");
        echo $data['fname'].' '.$data['tel_no'].' '.$data['address'].' '.$data['NIC'].' '.$data['DOB'].' '.$data['email'].' '.$data['qualification'].' '.$data['subject_id'].' '.$data['acc_no'].' '.$data['bank_name'].' '.$data['branch_name'];
        
    }
}