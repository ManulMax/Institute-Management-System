<?php

class StudentQuizList_Model extends Model{

    public function __construct(){
     	parent::__construct();
    }

       
     public function listStudentSubjects($userid){ 

        
        return $this->db->listWhere("s.name,c.batch","class c,subject s,enrollment e,student stu","s.id=c.subject_id and c.id=e.class_id and e.stu_reg_no=stu.reg_no and stu.user_id=$userid");
    
    } 

    public function listClasses($userid){

        return $this->db->listWhere("s.reg_no,c.id,c.batch","class c,user u,student s,enrollment e","u.id=s.user_id and s.reg_no=e.stu_reg_no and e.class_id=c.id and u.id=$userid");
    

    }

     public function listDetails($userid){

        return $this->db->listWhere("*","student","user_id=$userid");
    

    }

     public function listQuizzes($name,$batch){

        
         return $this->db->listWhere("q.id,q.topic,q.date,q.time_limit,m.marks","quiz q, class c, subject s,marks m","s.name='".$name."' and s.id=c.subject_id and c.batch='".$batch."' and c.id=q.class_id and m.quiz_id=q.id ");
    }

    public function getQuiz($id){
         return $this->db->listWhere("*","quiz","id=$id");
    }
   
    


}