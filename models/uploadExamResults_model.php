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

    public function listExams($userid){

        return $this->db->listWhere("e.id,e.topic","exam e,class c,teacher t","e.class_id=c.id and c.teacher_reg_no=t.reg_no and t.user_id=$userid");
    }

    public function create($data,$userid){
        $classIDList = $this->db->listWhere("c.id","class c,teacher t","c.teacher_reg_no=t.reg_no and t.user_id=$userid and c.batch='".$data['batch']."'");
        $classID = mysqli_fetch_assoc($classIDList);
        return $this->db->insert("exam","(topic,class_id,date)","('".$data['topic']."',".$classID['id'].",'".$data['date']."')");
    }





}