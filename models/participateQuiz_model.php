<?php

class participateQuiz_Model extends Model{

    public function __construct(){
     	parent::__construct();
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

    public function listDetails($userid){

        return $this->db->listWhere("*","student","user_id=$userid");
    
    }

    public function listQuestions($userid){
        return $this->db->listAll("question");
    }


    public function listStudentSubjects($userid){ 

        
        return $this->db->listWhere("s.name,c.batch","class c,subject s,enrollment e,student stu","s.id=c.subject_id and c.id=e.class_id and e.stu_reg_no=stu.reg_no and stu.user_id=$userid");
    
    } 



}