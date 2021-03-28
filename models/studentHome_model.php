<?php

class studentHome_Model extends Model{

    public function __construct(){
     	parent::__construct();
    }

    public function listClasses($userid){

        return $this->db->listWhere("s.reg_no,c.id,c.batch","class c,user u,student s,enrollment e","u.id=s.user_id and s.reg_no=e.stu_reg_no and e.class_id=c.id and u.id=$userid");
    

    }

    public function listSchedules(){

        return $this->db->listWhere("t.fname,s.day,s.start_time,s.end_time,h.name as hallName,sub.name,c.batch","schedule s,teacher t,subject sub,class c,hall h","s.class_id=c.id and s.hall_id=h.id and c.subject_id=sub.id and c.teacher_reg_no=t.reg_no");
    

    }

     public function listStudentSubjects($userid){ 

        
        return $this->db->listWhere("s.name,c.batch","class c,subject s,enrollment e,student stu","s.id=c.subject_id and c.id=e.class_id and e.stu_reg_no=stu.reg_no and stu.user_id=$userid");
     
    } 

     public function listDetails($userid){

        return $this->db->listWhere("*","student","user_id=$userid");
    

    }

    public function getAttendanceCount($month,$userid){ 

        
        return $this->db->listWhere("count(a.presence) as sum","attendance a,student s","a.stu_reg_no=s.reg_no and s.user_id=$userid and a.date LIKE '".$month."%'");
    
    } 

    /*public function listClasses($userid){

        return $this->db->listWhere("c.batch,s.name","class c,subject s, enrollment e, student stu,student s","s.id=c.subject_id and c.id=e.class_id and e.stu_reg_no=stu.reg_no and stu.user_id=$userid");
    }*/

    public function listTeacher(){

        return $this->db->listAll("teacher");
        

    }

    public function listSubjects(){

        return $this->db->listAll("subject");
        

    }


}