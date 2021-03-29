<?php

class participateQuizLandingPage_Model extends Model{

    public function __construct(){
     	parent::__construct();
    }

    

    public function listDetails($userid){

        return $this->db->listWhere("*","student","user_id=$userid");
    

    }

    public function listStudentSubjects($userid){ 

        
        return $this->db->listWhere("s.name,c.batch","class c,subject s,enrollment e,student stu","s.id=c.subject_id and c.id=e.class_id and e.stu_reg_no=stu.reg_no and stu.user_id=$userid");
    
    } 


   

}


