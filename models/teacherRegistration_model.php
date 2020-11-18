<?php

class teacherRegistration_model extends Model{

    public function __construct(){
     	parent::__construct();
    }

    public function listSubject(){

        return $this->db->listAll("subject");
    }

    public function create($data){
    	// echo "abcd";
    	$this->db->insert("user","(username,password,type,flag)","('".$data['email']."',md5('".$data['NIC']."'),'Teacher',0)");

        $userID = $this->db->listWhere("id","user","username='".$data['email']."'");
        //echo $userID;
        $num = mysqli_fetch_assoc($userID);
 
       
        $this->db->insert('teacher',"(fname,mname,lname,tel_no,address,NIC,DOB,gender,email,qualifications,subject_id,acc_no,bank_name,acc_type,reg_date,user_id)","('".$data['fname']."','".$data['mname']."','".$data['lname']."',".$data['tel_no'].",'".$data['address']."','".$data['NIC']."','".$data['DOB']."','".$data['gender']."','".$data['email']."','".$data['qualifications']."',".$data['subject_id'].",".$data['acc_no'].",'".$data['bank_name']."','".$data['acc_type']."','".$data['reg_date']."',".$num['id'].")");
    }

}