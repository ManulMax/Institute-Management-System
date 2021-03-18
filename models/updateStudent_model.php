<?php

class updateStudent_model extends Model{

    public function __construct(){
     	parent::__construct();
    }

    public function listStudent(){

        return $this->db->listAll("Student");
    }
}