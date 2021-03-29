<?php

class examMarks_Model extends Model{

    public function __construct(){
     	parent::__construct();
    }

    public function listClasses($userid){

        return $this->db->listWhere("s.reg_no,c.id,c.batch","class c,user u,student s,enrollment e","u.id=s.user_id and s.reg_no=e.stu_reg_no and e.class_id=c.id and u.id=$userid");
    

    }

   

     public function listStudentSubjects($userid){ 

        
        return $this->db->listWhere("s.name,c.batch","class c,subject s,enrollment e,student stu","s.id=c.subject_id and c.id=e.class_id and e.stu_reg_no=stu.reg_no and stu.user_id=$userid");
     
    } 

     public function listDetails($userid){

        return $this->db->listWhere("*","student","user_id=$userid");
    

    }

     public function listResultSheet($name,$batch){

        /*return $this->db->listWhere("m.id,m.heading,m.description,m.name","subject s,class c, study_material m","m.class_id=c.id and c.batch='".$batch."' and c.subject_id=s.id and s.name='".$name."' and m.deleted=0");*/

        return $this->db->listWhere("r.id,r.filename,e.topic","result_sheet r,exam e,class c,subject s","s.name='".$name."' and s.id=c.subject_id and c.batch='".$batch."' and c.id=e.class_id and e.result_sheet_id=r.id ");
    }

   
    
   

}