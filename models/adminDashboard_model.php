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

    public function classCount(){
        return $this->db->listWhere("");
    }

}