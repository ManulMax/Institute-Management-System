<?php

class index_Model extends Model{

    public function __construct(){
     	parent::__construct();
    }

    public function listAllTeachers(){

        return $this->db->listWhere("fname","teacher","deleted=0");        

    }

    public function listAllSubject(){

        return $this->db->listWhere("name","subject","deleted=0");        

    }
    
    public function listAllClass($today){
        return $this->db->listWhere("name","subject s,schedule e,class c","e.day='".$today."' and e.class_id=c.id and c.id=s.id");        
       
    }

    public function listClassTime($today){
        return $this->db->listWhere("start_time","subject s,schedule e,class c","e.day='".$today."' and e.class_id=c.id and c.id=s.id");        
       
    }

    public function listBatch($today){
        return $this->db->listWhere("batch","subject s,schedule e,class c","e.day='".$today."' and e.class_id=c.id and c.id=s.id");        
       
    }
}