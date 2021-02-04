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
 
     public function listStuDetails($reg){

        return $this->db->listWhere("fname,image","student","reg_no=$reg");
    

    }


   public function create($data){

    $classID = $this->db->listWhere("c.id","class c, subject s","s.name='".$data['subject']."' and s.id=c.subject_id and c.batch='".$data['batch']."' ");
    $id = mysqli_fetch_assoc($classID);    

     $this->db->insert("fees","(date,amount,class_id,stu_reg_no,income_id)","('".$data['payment-date']."','"($data['paid-amount'])."','"($id['class_id'])."','"($data['regNo'])."',1)");

 }

    
    public function getUser($id){

        return $this->db->listWhere('user',array('nic','first_name','last_name','gender','email','contact_no','user_status','user_type'),"nic='$id'");
    }

  

   
  



}