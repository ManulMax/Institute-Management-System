<?php

class updateStaff_model extends Model{

    public function __construct(){
     	parent::__construct();
    }

    public function listStaff(){

        return $this->db->listAll("staff");
    
    }
}