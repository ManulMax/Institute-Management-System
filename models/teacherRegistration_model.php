<?php

class teacherRegistration_model extends Model{

    public function __construct(){
     	parent::__construct();
    }

    public function listSubject(){

        return $this->db->listAll("subject");
    }

    public function create($data){
    	$this->db->insert("user","(username,password,type,flag)","('".$data['email']."',md5('".$data['NIC']."'),'Teacher',0)");

        $userID = $this->db->listWhere("id","user","username='".$data['email']."'");
        $num = mysqli_fetch_assoc($userID);

        $this->db->insert('teacher',"(fname,tel_no,address,NIC,DOB,gender,email,qualifications,subject_id,acc_no,bank_name,branch_name,reg_date,user_id)","('".$data['fname']."',".$data['tel_no'].",'".$data['address']."','".$data['NIC']."','".$data['DOB']."','".$data['gender']."','".$data['email']."','".$data['qualifications']."',".$data['subject_id'].",".$data['acc_no'].",'".$data['bank_name']."','".$data['branch_name']."','".$data['reg_date']."',".$num['id'].")");
    }

}