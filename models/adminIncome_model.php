<?php

class adminIncome_model extends Model{

    public function __construct(){
     	parent::__construct();
    }

    public function listClass(){
        return $this->db->listWhere("name","subject","1");    
    }

    public function listIncome(){
        return $this->db->listWhere("s.class_id sum(f.amount)","fees f,subject s","");    
        //return $this->db->listWhere("count(a.presence) as sum","attendance a,student s","a.stu_reg_no=s.reg_no and s.user_id=$userid and a.date LIKE '".$month."%'");
    
    }
    // public function classCount($day){
    //     return $this->db->listWhere("count(class_id) as sum","schedule","day='".$day."'");
    // }
}