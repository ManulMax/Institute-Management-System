<?php

class staffDashboard_Model extends Model{

    public function __construct(){
     	parent::__construct();
    }

     public function listDetails($userid){

        return $this->db->listWhere("*","staff","user_id=$userid");
    

    }


    public function listSubjects(){

        return $this->db->listAll("subject");
        

    }

    public function listSchedules(){

        return $this->db->listWhere("s.day,s.start_time,s.end_time,h.name as hallName,sub.name,c.batch FORMAT(s.date,'dddd') AS result","schedule s,teacher t,subject sub,class c,hall h","s.class_id=c.id and s.hall_id=h.id and c.subject_id=sub.id and c.teacher_reg_no=t.reg_no and s.date=result");
    

    }

    public function listStudentCount($batch){

        return $this->db->listWhere("count(e.stu_reg_no) as count1","enrollment e,class c","e.class_id=c.id  and c.batch='".$batch."'");

    }

    public function listAllStudentCount(){

        return $this->db->listWhere("count(e.stu_reg_no) as count1","enrollment e,class c","e.class_id=c.id");

    }

    public function attendanceCount($batch){

        
        return $this->db->listWhere("count(a.stu_reg_no) as sum","attendance a,class c"," c.id=a.class_id  and c.batch='".$batch."' and a.date like '".date('Y')."-".date('m')."%'");
    }

   public function OverallAttendance(){

        
        return $this->db->listWhere("count(a.stu_reg_no) as sum","attendance a,class c"," c.id=a.class_id  and a.date like '%".date('m')."-".date('d')."'");
    } 

  


}
