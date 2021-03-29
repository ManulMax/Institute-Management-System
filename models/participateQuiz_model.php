<?php

class participateQuiz_Model extends Model{

    public function __construct(){
     	parent::__construct();
    }

    public function listClasses($userid){

        return $this->db->listWhere("t.reg_no,c.id,c.batch","class c,user u,teacher t","u.id=t.user_id and t.reg_no=c.teacher_reg_no and u.id=$userid");
    

    }

    public function listStudentSubjects($userid){ 

        
        return $this->db->listWhere("s.name,c.batch","class c,subject s,enrollment e,student stu","s.id=c.subject_id and c.id=e.class_id and e.stu_reg_no=stu.reg_no and stu.user_id=$userid");
    
    } 
    

    public function listSubjects(){

        return $this->db->listAll("subject");
        

    }

    public function listDetails($userid){

        return $this->db->listWhere("*","student","user_id=$userid");
    
    }

    public function listQuestions($id){
       return $this->db->listWhere("*","question","quiz_id=$id");
    }

    public function getDuration($id){
       return $this->db->listWhere("time_hours,time_minutes","quiz","id=$id");
    }

    public function saveMarks($userid,$marks,$quizid){

       $this->db->insert("marks","(quiz_id,stu_reg_no,marks)","($quizid,(select reg_no from student where user_id=$userid),".$marks.")");
        
    }

     public function listQuizzes($name,$batch){
       
         return $this->db->listWhere("q.id,q.topic,q.date,q.time_hours,time_minutes","quiz q, class c, subject s","s.name='".$name."' and s.id=c.subject_id and c.batch='".$batch."' and c.id=q.class_id");
    }

    public function getStatus($userid,$quizid){    
         $result=$this->db->listWhere("count(m.stu_reg_no) as sum","marks m,student s","m.quiz_id=$quizid and m.stu_reg_no=s.reg_no and s.user_id=$userid");
         $row = mysqli_fetch_assoc($result);
         return $row['sum'];
    }

    public function getMarks($userid,$quizid){    
         $result=$this->db->listWhere("m.marks","marks m,student s","m.quiz_id=$quizid and m.stu_reg_no=s.reg_no and s.user_id=$userid");
         $row = mysqli_fetch_assoc($result);
         if(isset($row['marks'])){
            return $row['marks'];
         }else{
            return "-";
         }
    }


   


}