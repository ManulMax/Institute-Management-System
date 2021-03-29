<?php

class markAttendance_Model extends Model{

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

        return $this->db->listWhere("s.day,s.start_time,s.end_time,h.name as hallName,sub.name,c.batch","schedule s,teacher t,subject sub,class c,hall h","s.class_id=c.id and s.hall_id=h.id and c.subject_id=sub.id and c.teacher_reg_no=t.reg_no");
    

    } 

  

     public function listStuDetails($reg,$subjectname,$batchname){

         return $this->db->listWhere("s.fname,s.image,f.date,f.month,f.amount","student s,fees f,class c,subject sub","sub.name='".$subjectname."' and sub.id=c.subject_id and c.batch='".$batchname."' and c.id=f.class_id and s.reg_no=$reg and f.stu_reg_no=s.reg_no ORDER BY f.id DESC LIMIT 1 and s.deleted=0");
    }


    public function create($data){
        $this->db->insert("attendance","(class_id,stu_reg_no,date,presence)","(1,".$data['stu_reg_no'].",'".date("Y-m-d")."',1)");
    }






    



}