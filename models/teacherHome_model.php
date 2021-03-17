<?php

class teacherHome_Model extends Model{

    public function __construct(){
     	parent::__construct();
    }

    public function listDetails($userid){

        return $this->db->listWhere("*","teacher","user_id=$userid");
    

    } 

    public function listClasses($userid){

        return $this->db->listWhere("t.reg_no,c.id,c.batch","class c,user u,teacher t","u.id=t.user_id and t.reg_no=c.teacher_reg_no and u.id=$userid");
    

    }

    public function listStudentCount($userid,$batch){

        return $this->db->listWhere("count(e.stu_reg_no) as count1","enrollment e,class c,teacher t","e.class_id=c.id and c.teacher_reg_no=t.reg_no and t.user_id=$userid and c.batch='".$batch."'");

}

    public function listSchedules($userid){

        return $this->db->listWhere("s.day,s.start_time,s.end_time,h.name as hallName,sub.name,c.batch","schedule s,teacher t,subject sub,class c,hall h","s.class_id=c.id and s.hall_id=h.id and c.teacher_reg_no=t.reg_no and c.subject_id=sub.id and t.user_id=$userid");
    
    }


    public function listMaterials($id){

        return $this->db->listWhere("*","study_material","class_id=$id");
    
    }



    public function attendanceCount($userid,$batch){

        return $this->db->listWhere("count(a.stu_reg_no) as sum","attendance a,class c,teacher t","t.user_id=$userid and t.reg_no=c.teacher_reg_no and c.id=a.class_id and c.batch='".$batch."'");
    }

    


}