<?php

class StudentQuizList_Model extends Model{

    public function __construct(){
     	parent::__construct();
    }

       
     public function listStudentSubjects($userid){ 

        
        return $this->db->listWhere("s.name,c.batch","class c,subject s,enrollment e,student stu","s.id=c.subject_id and c.id=e.class_id and e.stu_reg_no=stu.reg_no and stu.user_id=$userid");
    
    } 

     public function listDetails($userid){

        return $this->db->listWhere("*","student","user_id=$userid");
    

    }

     public function listQuizzes($name,$batch){

        
         return $this->db->listWhere("q.topic,q.date,q.time_limit","quiz q, class c, subject s","s.name='".$name."' and s.id=c.subject_id and c.batch='".$batch."' and c.id=q.class_id");
    }
   
    


}