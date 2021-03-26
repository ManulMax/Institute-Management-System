<?php

class staffRegistration_model extends Model{

    public function __construct(){
     	parent::__construct();
    }

    public function create($data){
    	$this->db->insert("user","(username,password,type,flag)","('".$data['email']."',md5('".$data['NIC']."'),'staff',0)");

        $userID = $this->db->listWhere("id","user","username='".$data['email']."'");
        $num = mysqli_fetch_assoc($userID);

        $this->db->insert('staff',"(fname,tel_no,address,NIC,DOB,gender,email,fixed_salary,user_id)","('".$data['fname']."',".$data['tel_no'].",'".$data['address']."','".$data['NIC']."','".$data['DOB']."','".$data['gender']."','".$data['email']."',".$data['fixed_salary'].",".$num['id'].")");
    }


}