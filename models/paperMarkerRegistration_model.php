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

    public function listPaperMarkers(){

        return $this->db->listAll("paper_marker");
    

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
       // $password=password_hash($data['NIC'], PASSWORD_DEFAULT);
        $this->db->insert("user","(username,password,type,flag)","('".$data['email']."',md5(".$data['NIC']."),'Paper Marker',0)");

        $userID = $this->db->listWhere("id","user","username='".$data['email']."'");
        $num = mysqli_fetch_assoc($userID);
 
        $this->db->insert('paper_marker',"(name,tel_no,address,NIC,DOB,gender,email,qualifications,teacher_id,user_id)","('".$data['name']."',".$data['tel_no'].",'".$data['address']."','".$data['NIC']."','".$data['DOB']."','".$data['gender']."','".$data['email']."','".$data['qualifications']."',".$_SESSION['userid'].",".$num['id'].")");

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