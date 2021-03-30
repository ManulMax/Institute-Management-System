<?php

class adminDashboard_model extends Model{

    public function __construct(){
     	parent::__construct();    }


    public function listStudentCount(){
        return $this->db->listCol("count(reg_no) as stuCount","student");
    }

    public function listClassCount(){
        return $this->db->listCol("count(id) as classCount","class");
    }

    public function listSubCount(){
        return $this->db->listCol("count(id) as subCount","subject");
    }

    public function listTecCount(){
        return $this->db->listCol("count(reg_no) as tecCount","teacher");
    }

    public function classCount($day){
        return $this->db->listWhere("count(class_id) as sum","schedule","day='".$day."'");
    }

    public function getRegisterCount($month){    
        return $this->db->listWhere("count(*) as sum","student s","s.deleted=0 and s.reg_date LIKE '".$month."%'");
        return $this->db->listWhere("count(a.presence) as sum","attendance a,student s","a.stu_reg_no=s.reg_no and s.user_id=$userid and a.date LIKE '".$month."%'");

    } 

}