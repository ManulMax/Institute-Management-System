<?php

class studentHome_Model extends Model{

    public function __construct(){
     	parent::__construct();
    }

    public function listClasses($userid){

        return $this->db->listWhere("s.reg_no,c.id,c.batch","class c,user u,student s,enrollment e","u.id=s.user_id and s.reg_no=e.stu_reg_no and e.class_id=c.id and u.id=$userid");
    

    }

}