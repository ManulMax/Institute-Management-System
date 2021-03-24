<?php

class studentRegistration_Model extends Model{

    public function __construct(){
        parent::__construct();
    }

    
    public function listDetails($userid){

        return $this->db->listWhere("*","staff","user_id=$userid");
    

    }

    public function listSubjects(){

        return $this->db->listAll("subject");
        

    }


    public function create($data){
        $this->db->insert("user","(username,password,type,flag,deleted)","('".$data['email']."','".md5($data['NIC'])."','Student',0,0)");

        $userID = $this->db->listWhere("id","user","username='".$data['email']."'");
        $num = mysqli_fetch_assoc($userID);

        move_uploaded_file($data['temp'], "C:\wamp64\www\IMS_Vidarsha\public\img\studentImages\\".$data['imagename']);

        
        $this->db->insert('student',"(fname,tel_no,address,NIC,DOB,gender,email,school,grade,stream,image,user_id,deleted)","('".$data['fname']."',".$data['tel_no'].",'".$data['address']."','".$data['NIC']."','".$data['DOB']."','".$data['gender']."','".$data['email']."','".$data['school']."',".$data['grade'].",'".$data['stream']."','".$data['imagename']."',".$num['id'].",0)");

        $reg_no = $this->db->listWhere("reg_no","student","NIC='".$data['NIC']."'");
        $reg = mysqli_fetch_assoc($reg_no);

        $this->db->insert('parent',"(name,tel_no,stu_reg_no,deleted)","('".$data['name']."','".$data['tel']."',".$reg['reg_no'].",0)");

        $result=$this->db->insert('studentSubject',"(subject1,subject2,subject3,stu_reg_no,deleted)","('".$data['subject1']."','".$data['subject2']."','".$data['subject3']."',".$reg['reg_no'].",0)"); 

        $stuName = $data['fname'];
        Session::set('studentRegNo',$reg);
        Session::set('studentName',$stuName); 
        return $result;
    }


   

        
   } 

    



