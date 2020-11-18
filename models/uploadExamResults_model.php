<?php

class uploadExamResults_Model extends Model{

    public function __construct(){
     	parent::__construct();
    }

    public function listDetails($userid){

        return $this->db->listWhere("*","paper_marker","user_id=$userid");
    

    }

    public function listClasses($userid){

        return $this->db->listWhere("t.reg_no,c.id,c.batch","class c,user u,teacher t","u.id=t.user_id and t.reg_no=c.teacher_reg_no and u.id=$userid");
    

    }

    public function listHalls(){

    	return $this->db->listAll("hall");
        

    }

    public function listSubjects(){

        return $this->db->listAll("subject");
        

    }





}