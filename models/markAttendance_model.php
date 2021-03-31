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

         return $this->db->listWhere("s.fname,s.image,f.date,f.month,f.amount","student s,fees f,class c,subject sub","sub.name='".$subjectname."' and sub.id=c.subject_id and c.batch='".$batchname."' and c.id=f.class_id and s.reg_no=$reg and f.stu_reg_no=s.reg_no and s.deleted=0 ORDER BY f.id DESC LIMIT 1");
    }

    public function checkPresence($data){
        $result1=$this->db->listWhere("c.id","class c,subject s","c.subject_id=s.id and s.name='".$data['subjectname']."' and  c.batch='".$data['batchname']."'");
        $res1=mysqli_fetch_assoc($result1);
        $result2=$this->db->ListWhere("presence","attendance","class_id=".$res1['id']." and date=".date("Y-m-d")." and stu_reg_no=".$data['stu_reg_no']);
        $res2=mysqli_fetch_assoc($result2);
        if(isset($res)){
            return 1;
        }
        return 0;
    }


    public function create($data){
        $result=$this->db->listWhere("c.id","class c,subject s","c.subject_id=s.id and s.name='".$data['subjectname']."' and  c.batch='".$data['batchname']."'");
        $res=mysqli_fetch_assoc($result);
        return $this->db->insert("attendance","(class_id,stu_reg_no,date,presence)","(".$res['id'].",".$data['stu_reg_no'].",'".date("Y-m-d")."',1)");
    }






    



}