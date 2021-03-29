<?php

class collectClassFees_Model extends Model{

    public function __construct(){
     	parent::__construct();
    }
        

    public function listDetails($userid){

        return $this->db->listWhere("*","staff","user_id=$userid");
    

    }
 
  
    public function listSubjects($reg){

        
        return $this->db->listWhere("s.name,s.id","class c,subject s,enrollment e","e.stu_reg_no=$reg and e.class_id=c.id and c.subject_id=s.id");
    
    } 


    public function listStuDetails($reg){

        return $this->db->listWhere("s.fname,s.image","student s","s.reg_no=$reg and s.deleted=0");
    }
 
   /* public function listStudentFeesDetails($reg){
        
        $classID = $this->db->listWhere("c.id","class c, subject s","s.name='".$data['subject']."' and s.id=c.subject_id and c.batch='".$data['batch']."'");
        $id = mysqli_fetch_assoc($classID);

        return $this->db->listWhere("f.month,c.monthly_fee","Fees f, class c","f.stu_reg_no=$reg and f.class_id=".$id['id']." and c.id=".$id['id']." ORDER BY f.id DESC LIMIT 1");
    }*/

    public function listStudentFeesDetails($reg){
        return $this->db->listWhere("f.month,f.amount","student s,fees f","f.stu_reg_no=s.reg_no ORDER BY f.id DESC LIMIT 1");
    }

     /*return $this->db->listWhere("f.month,f.amount","fees f,class c,subject sub","sub.name='".$subjectname."' and sub.id=c.subject_id and c.batch='".$batchname."' and c.id=f.class_id and  f.stu_reg_no=$reg ORDER BY f.id DESC LIMIT 1");
    }
   */

    public function listFees($reg){

        
        return $this->db->listWhere("s.name,c.batch, c.monthly_fee","class c, subject s, enrollment e","e.stu_reg_no=$reg and e.class_id=c.id and c.subject_id=s.id");
    
    } 


   public function create($data){

    $classID = $this->db->listWhere("c.id","class c, subject s","s.name='".$data['subject']."' and s.id=c.subject_id and c.batch='".$data['batch']."'");
    $id = mysqli_fetch_assoc($classID);
    
    $result=$this->db->insert('fees',"(date,month,amount,class_id,stu_reg_no)","('".date("Y/m/d")."','".$data['month']."',".$data['amount'].",".$id['id'].",".$data['stu_reg_no'].")");  

    return $result;
 }

}   

