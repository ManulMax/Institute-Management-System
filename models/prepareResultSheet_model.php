<?php

class prepareResultSheet_Model extends Model{

    public function __construct(){
     	parent::__construct();
    }

    public function listDetails($userid){

        return $this->db->listWhere("*","teacher","user_id=$userid");
    }

    public function listPmDetails($userid){

        return $this->db->listWhere("*","paper_marker","user_id=$userid");
    }

    public function listHalls(){

    	return $this->db->listAll("hall");
    }

    public function listTeacherClasses($userid){

        return $this->db->listWhere("t.reg_no,c.id,c.batch","class c,teacher t,paper_marker p","c.teacher_reg_no=t.reg_no and t.user_id=p.teacher_id and p.user_id=$userid and p.deleted=0");
    }

    public function listExams($userid){

        return $this->db->listWhere("e.id,e.topic","exam e,class c,teacher t,paper_marker p","e.class_id=c.id and c.teacher_reg_no=t.reg_no and p.teacher_id=t.user_id and p.user_id=$userid and p.deleted=0");
    }

    public function listStudents($userid,$batch){

        return $this->db->listWhere("s.reg_no,s.fname","student s,enrollment e,class c,paper_marker p,teacher t","s.reg_no=e.stu_reg_no and e.class_id=c.id and c.batch='".$batch."' and c.teacher_reg_no=t.reg_no and p.teacher_id=t.user_id and p.user_id=$userid and s.deleted=0 and p.deleted=0");

    }

    public function listSubjects(){

        return $this->db->listAll("subject");
    }

    public function listCurrentSchedules($hallName,$daySelected){

        return $this->db->listAll("s.start_time,s.end_time,t.fname,t.mname,t.lname,sub.name,c.batch","schedule s,teacher t,subject sub,class c","s.class_id=c.id and c.teacher_reg_no=t.reg_no and c.subject_id=sub.id and s.hall_id=(select id from hall where name='$hallName') and s.day='$daySelected'");
    }


}