<?php

class teacherRegistration_model extends Model{

    public function __construct(){
     	parent::__construct();
    }

    public function listSubject(){

        return $this->db->listAll("subject");
    }

    public function create($data){
        // $password=password_hash($data['NIC'], PASSWORD_DEFAULT);
        //  $this->db->insert("user","(fname,mname,lname,tel_no,address,NIC,DOB,gender,email,qualification,subject_id,acc_no,bank_name,acc_type,reg_date,user_id)","('".$data['email']."',md5(".$data['NIC']."),'Paper Marker',0)");
 
        //  $userID = $this->db->listWhere("id","user","username='".$data['email']."'");
        //  $num = mysqli_fetch_assoc($userID);
  
        //  $this->db->insert('paper_marker',"(name,tel_no,address,NIC,DOB,gender,email,qualifications,teacher_id,user_id)","('".$data['name']."',".$data['tel_no'].",'".$data['address']."','".$data['NIC']."','".$data['DOB']."','".$data['gender']."','".$data['email']."','".$data['qualifications']."',$_SESSION['userid'],".$num['id'].")");
 
     }
 
}