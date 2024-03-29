<?php

class materials_Model extends Model{

    public function __construct(){
     	parent::__construct();
    }

    public function listDetails($userid){

        return $this->db->listWhere("*","teacher","user_id=$userid");
    }


    public function listPmDetails($userid){

        return $this->db->listWhere("*","paper_marker","user_id=$userid");
    }


    public function liststuDetails($userid){

        return $this->db->listWhere("*","student","user_id=$userid");
    }

 
    public function listClasses($userid){

        return $this->db->listWhere("t.reg_no,c.id,c.batch","class c,user u,teacher t","u.id=t.user_id and t.reg_no=c.teacher_reg_no and u.id=$userid");
    }


    public function listTeacherClasses($userid){

        return $this->db->listWhere("t.reg_no,c.id,c.batch","class c,teacher t,paper_marker p","c.teacher_reg_no=t.reg_no and t.user_id=p.teacher_id and p.user_id=$userid and p.deleted=0");
    }


    public function listMaterials(){

        return $this->db->listAll("study_material");
    }


    public function listClassMaterials($id){

        return $this->db->listWhere("*","study_material","class_id=$id and deleted=0");
    }

    public function listStuMaterials($name,$batch){

        return $this->db->listWhere("m.id,m.heading,m.description,m.name","subject s,class c, study_material m","m.class_id=c.id and c.batch='".$batch."' and c.subject_id=s.id and s.name='".$name."' and m.deleted=0");
    }


    public function listSubjects(){

        return $this->db->listAll("subject");
    }

    public function create($data,$classID,$userid){
            move_uploaded_file($data['temp'], "C:\wamp64\www\IMS_Vidarsha\public\uploads\\".$data['filename']);

            return $this->db->insert("study_material","(heading,description,name,class_id,teacher_reg_no,deleted)","('".$data['heading']."','".$data['description']."','".$data['filename']."',$classID,(select reg_no from teacher where user_id=$userid),0)");
    }

    public function pmCreate($data,$classID,$userid){
            move_uploaded_file($data['temp'], "C:\wamp64\www\IMS_Vidarsha\public\uploads\\".$data['filename']);

            $result=$this->db->listWhere("t.reg_no","teacher t,paper_marker p","p.user_id=$userid and p.teacher_id=t.user_id and p.deleted=0");
            $tid=mysqli_fetch_assoc($result);

            return $this->db->insert("study_material","(heading,description,name,class_id,teacher_reg_no,deleted)","('".$data['heading']."','".$data['description']."','".$data['filename']."',$classID,".$tid['reg_no'].",0)");
    }

    public function listStudentSubjects($userid){ 

        
        return $this->db->listWhere("s.name,c.batch","class c,subject s,enrollment e,student stu","s.id=c.subject_id and c.id=e.class_id and e.stu_reg_no=stu.reg_no and stu.user_id=$userid");
    
    } 


    public function update($data){


    }

    public function delete($id){
        return $this->db->update('study_material',"deleted=1","id=$id");

    }




}