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

     public function listDetails($userid){

        return $this->db->listWhere("*","student","user_id=$userid");
    

    }

    public function listTeacher(){

        return $this->db->listAll("teacher");
        

    }

    public function listSubjects(){

        return $this->db->listAll("subject");
        

    }


}