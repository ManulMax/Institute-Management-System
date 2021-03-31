<?php

class enrollStudent_Model extends Model{

    public function __construct(){
     	parent::__construct();
    }

    
    public function listSubjects(){

        return $this->db->listAll("subject");
        
 
    }

    public function listDetails($userid){

        return $this->db->listWhere("*","staff","user_id=$userid");
    

    }


     public function listStuDetails($reg){

        return $this->db->listWhere("fname,image","student","reg_no=$reg and deleted=0");
    

    }

     public function listClassCapacity(){

        
        return $this->db->listWhere("s.name,c.batch, h.capacity, h.capacity-count(e.stu_reg_no) as count1","class c, subject s, hall h, schedule sh, enrollment e","c.subject_id=s.id and sh.class_id=c.id and sh.hall_id=h.id and e.class_id=c.id GROUP BY e.class_id");

    }

    public function checkStudent($reg){

        $del= $this->db->listWhere("deleted","student","reg_no=$reg");
        return $del;

    }

    public function checkenrollment($data){

        $result1=$this->db->listWhere("c.id","class c,subject s","c.subject_id=s.id and s.name='".$data['subject']."' and  c.batch='".$data['batch']."'");
        $res1=mysqli_fetch_assoc($result1);
        $result2=$this->db->ListWhere("stu_reg_no","enrollment","class_id=".$res1['id']." and stu_reg_no=".$data['stu_reg_no']);
        $res2=mysqli_fetch_assoc($result2);
        if(isset($res)){
            return 1;
        }
        return 0;
    }



    public function create($data){

    $classID = $this->db->listWhere("c.id","class c, subject s","s.name='".$data['subject']."' and s.id=c.subject_id and c.batch='".$data['batch']."'");
    $id = mysqli_fetch_assoc($classID);


     $result=$this->db->insert('enrollment',"(class_id,stu_reg_no,date)","('".$id['id']."','".$data['stu_reg_no']."','".date("Y-m-d")."')");

      return $result;
 }

   




}