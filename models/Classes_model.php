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

        return $this->db->listWhere("s.day,s.start_time,s.end_time,h.name as hallName,t.fname,sub.name,c.batch","schedule s,teacher t,subject sub,class c,hall h","s.class_id=c.id and s.hall_id=h.id and c.teacher_reg_no=t.reg_no and c.subject_id=sub.id");
    }

    public function checkBatch($batchname,$userid){
        $result = $this->db->listWhere("c.id","class c,teacher t","c.batch='".$batchname."' and c.teacher_reg_no=t.reg_no and t.user_id=$userid");
        $res = mysqli_fetch_assoc($result);
        if(isset($res)){
            return 1;
        }
        return 0;
    }

    public function saveSchedule($data,$userid){
        $teacher = $this->db->listWhere("reg_no,subject_id","teacher","user_id=$userid");
        $teacherDetails = mysqli_fetch_assoc($teacher);
        $this->db->insert("class","(monthly_fee,batch,subject_id,teacher_reg_no)","(".$data['fees'].",'".$data['batchname']."',".$teacherDetails['subject_id'].",".$teacherDetails['reg_no'].")");
        $class = $this->db->getLastRow("id","class");
        $classDetails = mysqli_fetch_assoc($class);
       $this->db->insert("schedule","(class_id,hall_id,day,start_time,end_time,start_date,staff_reg_no)","(".$classDetails['id'].",".$data['hall'].",'".$data['day']."','".$data['startTime']."','".$data['endTime']."','".$data['startDate']."',1)");
    }

    


}