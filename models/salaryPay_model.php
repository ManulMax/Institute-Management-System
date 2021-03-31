<?php

class salaryPay_model extends Model{

    public function __construct(){
     	parent::__construct();
    }

    public function listTeacher(){
        return $this->db->listWhere("*","teacher","deleted=0"); 
    }
}