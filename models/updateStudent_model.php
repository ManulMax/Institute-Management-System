<?php

class updateStudent_model extends Model{

    public function __construct(){
     	parent::__construct();
    }

    public function listStudent(){
        return $this->db->listWhere("*","student","deleted=0");
    }

    public function delete($userid){
        $this->db->update('user',"deleted=1","id=$userid");
        return $this->db->update('student',"deleted=1","user_id=$userid");
    }
}