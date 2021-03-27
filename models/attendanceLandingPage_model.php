<?php

class attendanceLandingPage_Model extends Model{

    public function __construct(){
     	parent::__construct();
    }

   

    public function listDetails($userid){

        return $this->db->listWhere("*","staff","user_id=$userid");
    

    }

    public function listSubjects(){

        return $this->db->listWhere("s.name,c.batch","subject s,class c","c.subject_id=s.id");
        

    }


  public function listSchedules(){

        return $this->db->listWhere("s.day,s.start_time,s.end_time,h.name as hallName,sub.name,c.batch","schedule s,teacher t,subject sub,class c,hall h","s.class_id=c.id and s.hall_id=h.id and c.subject_id=sub.id and c.teacher_reg_no=t.reg_no and s.day='".date('l')."'");
    

    } 

    

   




}