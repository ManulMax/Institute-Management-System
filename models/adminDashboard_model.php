<?php

class adminDashboard_model extends Model{

    public function __construct(){
     	parent::__construct();
    }


    public function listStudentCount($userid,$batch){

        return $this->db->listWhere("count(e.stu_reg_no) as count1","enrollment e,class c,teacher t","e.class_id=c.id and c.teacher_reg_no=t.reg_no and t.user_id=$userid and c.batch='".$batch."'");

}

    public function listPaidCount($userid,$batch){

        return $this->db->listWhere("count(e.stu_reg_no) as count1","enrollment e,class c,teacher t","e.class_id=c.id and c.teacher_reg_no=t.reg_no and t.user_id=$userid and c.batch='".$batch."'");

}

    public function listClassCount($userid,$batch){

        return $this->db->listWhere("count(e.stu_reg_no) as count1","enrollment e,class c,teacher t","e.class_id=c.id and c.teacher_reg_no=t.reg_no and t.user_id=$userid and c.batch='".$batch."'");

}

    public function listTecCount($userid,$batch){

        return $this->db->listWhere("count(e.stu_reg_no) as count1","enrollment e,class c,teacher t","e.class_id=c.id and c.teacher_reg_no=t.reg_no and t.user_id=$userid and c.batch='".$batch."'");

}
}