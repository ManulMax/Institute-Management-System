<?php

class collectClassFees_Model extends Model{

    public function __construct(){
     	parent::__construct();
    }
        

    public function listDetails($userid){

        return $this->db->listWhere("*","staff","user_id=$userid");
    

    }
 
    public function listSubjects(){ 

        return $this->db->listAll("subject");
        

    } 
 
    /* public function listStuDetails($reg){

        return $this->db->listWhere("fname,image","student","reg_no=$reg");
    

    }*/

    public function listStuDetails($reg){

         return $this->db->listWhere("s.fname,s.image,f.month","student s,fees f","s.reg_no=$reg and f.stu_reg_no=s.reg_no ORDER BY f.id DESC LIMIT 1");
    }

    public function listFees(){

        return $this->db->listWhere("s.name, c.batch, c.monthly_fee","class c, subject s","s.id=c.subject_id");
    

    } 



   public function create($data){

    $classID = $this->db->listWhere("c.id","class c, subject s","s.name='".$data['subject']."' and s.id=c.subject_id and c.batch='".$data['batch']."' ");
    $id = mysqli_fetch_assoc($classID);    

     $this->db->insert('fees',"(date,month,amount,class_id,stu_reg_no,income_id)","('".date("Y/m/d")."','".($data['month'])."','".($data['amount'])."','".($id['class_id'])."','".($data['stu_reg_no'])."',1)");  
 }

}  