<?php

class addSubject_model extends Model{

    public function __construct(){
     	parent::__construct();
    }

    public function listSubject(){

        return $this->db->listAll("subject");
    

    }
}