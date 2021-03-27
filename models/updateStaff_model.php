<?php

class updateStaff_model extends Model{

    public function __construct(){
     	parent::__construct();
    }

    public function listStaff(){
        return $this->db->listAll("staff");    
    }

    public function listStaffDetails($userid){
        return $this->db->listWhere("*","staff","user_id=$userid");
    }

    public function update($data,$userSf){
        
        $this->db->update('staff',"tel_no=".$data['tel_no'].",address='".$data['address']."',fixed_salary=".$data['fixed_salary']."","user_id=$userSf");
       
        return $result;
    }
}

