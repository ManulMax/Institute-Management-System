<?php

class index_model extends Model{

    public function __construct(){
     	parent::__construct();
    }

    public function listTodayClass(){

        return $this->db->listCol("fname, mname, lname","teacher");
        

    }


}