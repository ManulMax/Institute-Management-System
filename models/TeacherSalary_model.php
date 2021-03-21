<?php

class TeacherSalary_Model extends Model{

    public function __construct(){
     	parent::__construct();
    }

    public function listDetails($userid){

        return $this->db->listWhere("*","teacher","user_id=$userid");
    
    }

    public function listSalaryDetails($userid){
        return $this->db->listWhere("s.date,s.month,s.amount","teacher_salary s,teacher t","s.teacher_reg_no=t.reg_no and t.user_id=$userid ORDER BY id DESC LIMIT 1");
    
    }

    public function listClasses($userid){

        return $this->db->listWhere("t.reg_no,c.id,c.batch","class c,user u,teacher t","u.id=t.user_id and t.reg_no=c.teacher_reg_no and u.id=$userid");
    

    }


    public function listClassWissSalary($userid,$batch){

        return $this->db->listWhere("SUM(f.amount)*95/100 as totalAmount","fees f,class c,teacher t","f.class_id=c.id and c.batch='".$batch."' and c.teacher_reg_no=t.reg_no and t.user_id=$userid");
    

    }



}