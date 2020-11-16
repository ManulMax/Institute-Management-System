<?php

class index_Model extends Model{

    public function __construct(){
     	parent::__construct();
    }

    public function listAllTeachers(){

        return $this->db->listCol("fname,mname,lname","teacher");        

    }

    public function listAllSubject(){

        return $this->db->listCol("name","subject");        

    }
    
    public function listAllClass(){

        return $this->db->listCol("name","subject");        

    }

}