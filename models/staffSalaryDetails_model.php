<?php

class staffSalaryDetails_Model extends Model{

    public function __construct(){
     	parent::__construct();
    }

   
     public function listDetails($userid){

        return $this->db->listWhere("*","staff","user_id=$userid");
    

    }

 
    public function listSubjects(){

        return $this->db->listAll("subject");
        

    }


    public function listSalaryDetails($userid){
        return $this->db->listWhere("st.month,st.amount,st.date","staff_salary st,staff s","st.staff_reg_no=s.reg_no and s.user_id=$userid ORDER BY id DESC LIMIT 1");
    
    }

   


   

   



}