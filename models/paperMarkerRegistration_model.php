<?php

class paperMarkerRegistration_Model extends Model{

    public function __construct(){
     	parent::__construct();
    }

    public function listHalls(){

    	return $this->db->listAll("hall");
    

    }

    public function listSubjects(){

        return $this->db->listAll("subject");
        

    }


    public function getUser($id){

        return $this->db->listWhere('user',array('nic','first_name','last_name','gender','email','contact_no','user_status','user_type'),"nic='$id'");
    }

    public function create($data){
        $this->db->insert("user","(username,type)","('".$data['email']."','Paper Marker')");

        $userID = $this->db->listWhere("id","user","username='".$data['email']."'");
        $num = mysqli_fetch_assoc($userID);
 
        $this->db->insert('paper_marker',"(name,tel_no,address,NIC,DOB,email,qualifications,user_id)","('".$data['name']."',".$data['tel_no'].",'".$data['address']."','".$data['NIC']."','".$data['DOB']."','".$data['email']."','".$data['qualifications']."',".$num['id'].")");

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