<?php

class materials_Model extends Model{

    public function __construct(){
     	parent::__construct();
    }

    public function listMaterials(){

    	return $this->db->listAll("study_material");
        

    }

    public function listSubjects(){

        return $this->db->listAll("subject");
        

    }


    public function getUser($id){

        return $this->db->listWhere('user',array('nic','first_name','last_name','gender','email','contact_no','user_status','user_type'),"nic='$id'");
    }

    public function create($data){
            move_uploaded_file($data['temp'], "C:\wamp64\www\IMS_Vidarsha\public\uploads\\".$data['filename']);
            $this->db->insert("study_material","(heading,description,name,class_id,teacher_reg_no)","('".$data['heading']."','".$data['description']."','".$data['filename']."',1,1)");


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