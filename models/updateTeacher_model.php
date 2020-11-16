<?php

class updateTeacher_model extends Model{

    public function __construct(){
     	parent::__construct();
    }

    public function listTeacher(){

        return $this->db->listAll("teacher");
    

    }

}