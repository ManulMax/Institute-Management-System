<?php

class studentRegistration_Model extends Model{

    public function __construct(){
        parent::__construct();
    }

    public function listHalls(){

        return $this->db->listAll("hall");
    

    }

    public function listSubjects(){

        return $this->db->listAll("subject");
        

    }


    public function getUser($id){

        return $this->db->listWhere('user',array('nic','first_name','last_name','gender','email','contact_no','user_status','user_type'),"nic='$id'");
    }

    public function create($data){
        $this->db->insert("user","(username,password,type,flag)","('".$data['email']."','".md5($data['NIC'])."','Student',0)");

        $userID = $this->db->listWhere("id","user","username='".$data['email']."'");
        $num = mysqli_fetch_assoc($userID);

        move_uploaded_file($data['temp'], "C:\wamp64\www\IMS_Vidarsha\public\img\studentImages\\".$data['imagename']);


        
        $this->db->insert('student',"(fname,mname,lname,tel_no,address,NIC,DOB,gender,email,school,grade,stream,image,user_id)","('".$data['fname']."','".$data['mname']."','".$data['lname']."',".$data['tel_no'].",'".$data['address']."','".$data['NIC']."','".$data['DOB']."','".$data['gender']."','".$data['email']."','".$data['school']."','".$data['grade']."','".$data['stream']."','".$data['imagename']."',".$num['id'].")");

        $reg_no = $this->db->listWhere("reg_no","student","NIC='".$data['NIC']."'");
        $reg = mysqli_fetch_assoc($reg_no);

        $this->db->insert('parent',"(name,tel_no,stu_reg_no)","('".$data['name']."','".$data['tel']."',".$reg['reg_no'].")");

        $this->db->insert('studentSubject',"(subject1,subject2,subject3,stu_reg_no)","('".$data['subject1']."','".$data['subject2']."','".$data['subject3']."',".$reg['reg_no'].")"); 

        $stuName = $data['fname']." ".$data['mname']." ".$data['lname'];
        Session::set('studentRegNo',$reg);
        Session::set('studentName',$stuName);

    }
 
        
    }

    /*public function update($data){

        $this->db->update('user',array(
            'nic' => $data['nic'],
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'gender' => $data['gender'],
            'email' => $data['email'],
            'username' => $data['email'],
            'contact_no' => $data['contact_no'],
            'user_status' => $data['user_status'],
            'user_type' => $data['user_type']),"nic = '{$data['nic']}'");

    }

    public function delete($id){
        $data = $this->db->listWhere('user',array('user_type'),"nic='$id'");

        if($data['user_type']=='owner'){
            return false;
        } else{
            $this->db->delete('user',"nic='$id'");
        }

    }*/




