<?php

class reschedule_Model extends Model{

    public function __construct(){
     	parent::__construct();
    }

    public function listDetails($userid){

        return $this->db->listWhere("*","teacher","user_id=$userid");
    

    }

    public function listClasses($userid){

        return $this->db->listWhere("t.reg_no,c.id,c.batch","class c,user u,teacher t","u.id=t.user_id and t.reg_no=c.teacher_reg_no and u.id=$userid");
    

    }

    public function listHalls(){

        return $this->db->listAll("hall");
        

    }


    public function listSchedules(){

        return $this->db->listWhere("s.day,s.start_time,s.end_time,h.name as hallName,t.fname,t.mname,t.lname,sub.name,c.batch","schedule s,teacher t,subject sub,class c,hall h","s.class_id=c.id and s.hall_id=h.id and c.teacher_reg_no=t.reg_no and c.subject_id=sub.id");
    

    }

    public function currentSchedule($id,$userid){

        return $this->db->listWhere("s.day,s.start_time,s.end_time,h.id as hallId,h.name as hallName,c.size","schedule s,teacher t,class c,hall h","s.class_id=$id and s.class_id=c.id and s.hall_id=h.id and c.teacher_reg_no=t.reg_no and t.user_id=$userid");
    

    }


    public function getUser($id){

        return $this->db->listWhere('user',array('nic','first_name','last_name','gender','email','contact_no','user_status','user_type'),"nic='$id'");
    }



    public function saveReschedule($data){
        $teacher = $this->db->listWhere("reg_no,subject_id","teacher","user_id=1");
        $teacherDetails = mysqli_fetch_assoc($teacher);
        $class= $this->db->listWhere("id","class","batch='".$data['batchname']."' and teacher_reg_no=".$teacherDetails['reg_no']);
        $classDetails = mysqli_fetch_assoc($class);

       $this->db->update("class","size=".$data['count'],"class_id=".$classDetails['id']);
       $this->db->update("schedule","hall_id=".$data['hall'].",day='".$data['day']."',start_time='".$data['startTime']."',end_time='".$data['endTime']."'","class_id=".$classDetails['id']);
    }


}