<?php

class Classes_Model extends Model{

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

    public function saveSchedule($data){
        $teacher = $this->db->listWhere("reg_no,subject_id","teacher","user_id=1");
        $teacherDetails = mysqli_fetch_assoc($teacher);
        $this->db->insert("class","(size,monthly_fee,batch,subject_id,teacher_reg_no)","(".$data['count'].",1000,'".$data['batchname']."',".$teacherDetails['subject_id'].",".$teacherDetails['reg_no'].")");
        $class = $this->db->getLastRow("id","class");
        $classDetails = mysqli_fetch_assoc($class);
       $this->db->insert("schedule","(class_id,hall_id,day,start_time,end_time,type,staff_reg_no)","(".$classDetails['id'].",".$data['hall'].",'".$data['day']."','".$data['startTime']."','".$data['endTime']."','P',1)");
    }

    public function saveReschedule($data){
        $teacher = $this->db->listWhere("reg_no,subject_id","teacher","user_id=1");
        $teacherDetails = mysqli_fetch_assoc($teacher);
        $class= $this->db->listWhere("id","class","batch='".$data['batchname']."' and teacher_reg_no=".$teacherDetails['reg_no']);
        $classDetails = mysqli_fetch_assoc($class);

       $this->db->update("schedule","hall_id=".$data['hall'].",day='".$data['day']."',start_time='".$data['startTime']."',end_time='".$data['endTime']."'","class_id=".$classDetails['id']);
    }


}