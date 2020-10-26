<?php

class downloadMaterials_Model extends Model{

    public function __construct(){
     	parent::__construct();
    }

    public function listMaterials(){

    	return $this->db->listAll("study_material");
        

    }

}