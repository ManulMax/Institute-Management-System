<?php

class index_Model extends Model{

    public function __construct(){
     	parent::__construct();
    }

    public function listAllTeachers(){

        return $this->db->listCol("fname,mname,lname","teacher");
        

    }


}