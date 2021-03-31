<?php

class addSubject_model extends Model{

    public function __construct(){
     	parent::__construct();
    }

    public function listSubject(){
        return $this->db->listWhere("*","subject","deleted=0");   

    }

    public function checkSubject($sub){
        return $this->db->listWhere("count(id) as sum","subject","name='".$sub."'"); 

    }

    public function create($data){
        $this->db->insert("subject","(name)","('".$data."')");

    }

    public function delete($subid){
        return $this->db->update('subject',"deleted=1","id=$subid");
    }
}