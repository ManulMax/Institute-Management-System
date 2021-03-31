<?php

class adminIncome_model extends Model{

    public function __construct(){
     	parent::__construct();
    }

    public function listTeacherClasses(){   
        return $this->db->listWhere("t.reg_no,t.fname,s.name,c.batch","teacher t,subject s,class c","s.id=c.subject_id and c.teacher_reg_no=t.reg_no");
    
    } 

     public function getStudentCount($reg,$batch){    
        $result=$this->db->listWhere("count(e.stu_reg_no) as stuCount","enrollment e,class c","c.batch='".$batch."' and c.id=e.class_id and c.teacher_reg_no=$reg");
        if(!empty($result)){
        	$res=mysqli_fetch_assoc($result);
        	return $res['stuCount'];
        }
        return 0;   
    }


    public function getIncome($reg,$batch){    
        $result=$this->db->listWhere("SUM(f.amount*5/100) as income","enrollment e,class c,fees f","c.batch='".$batch."' and c.id=e.class_id and c.teacher_reg_no=$reg and f.class_id=c.id and f.month='".date('F')."'");
        if(!empty($result)){
        	$res=mysqli_fetch_assoc($result);
        	return $res['income'];
        }
        return 0;   
    } 

    // public function getIncomeNew($reg,$batch){    
    //     $result=$this->db->listWhere("SUM(f.amount) as income","enrollment e,class c,fees f","c.batch='".$batch."' and c.id=e.class_id and c.teacher_reg_no=$reg and f.class_id=c.id and f.month='".date('F')."'");
    //     if(!empty($result)){
    //     	$res=mysqli_fetch_assoc($result);
    //     	return $res['income'];
    //     }
    //     return 0;   
    // } 

}