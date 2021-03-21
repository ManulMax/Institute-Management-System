<?php

class paperMarkerRegistration_Model extends Model{

    public function __construct(){
     	parent::__construct();
    }

    public function listDetails($userid){
        return $this->db->listWhere("*","teacher","user_id=$userid");
    }


    public function listClasses($userid){
        return $this->db->listWhere("t.reg_no,c.id,c.batch","class c,user u,teacher t","u.id=t.user_id and t.reg_no=c.teacher_reg_no and u.id=$userid");  
    }

    public function listPaperMarkers($userid){
        return $this->db->listWhere("*","paper_marker","teacher_id=$userid and deleted=0");
    }

    public function listPmDetails($userid){
        return $this->db->listWhere("*","paper_marker","user_id=$userid");
    }


    public function listHalls(){
    	return $this->db->listAll("hall");
    }

    public function listSubjects(){
        return $this->db->listAll("subject");
    }


    public function create($data){

        $this->db->insert("user","(username,password,type,flag)","('".$data['email']."',md5('".$data['NIC']."'),'Paper Marker',0)");

        $userID = $this->db->listWhere("id","user","username='".$data['email']."'");
        $num = mysqli_fetch_assoc($userID);
 
        $result = $this->db->insert('paper_marker',"(name,tel_no,address,NIC,DOB,gender,email,qualifications,teacher_id,user_id,deleted)","('".$data['name']."',".$data['tel_no'].",'".$data['address']."','".$data['NIC']."','".$data['DOB']."','".$data['gender']."','".$data['email']."','".$data['qualifications']."',".$_SESSION['userid'].",".$num['id'].",0)");
        return $result;

    }

    public function update($data){
        
        $result = $this->db->update('pper_marker',"email='".$data['email']."',tel_no=".$data['tel_no'].",address='".$data['address']."',qualifications='".$data['qualifications']."'","NIC='".$data['NIC']."'");
        return $result;
    }


    public function delete($userid){
        $this->db->update('paper_marker',"deleted=1","user_id=$userid");

    }




}