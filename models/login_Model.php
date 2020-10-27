<?php

class login_Model extends Model{

    public function __construct(){
     	parent::__construct();
    }

    public function loginUser(){

    	$users = $this->db->listWhere("*","user","username='".$_POST['username']."'");
    	if($users){
    		foreach ($users as $user) {
            if($_POST['password'] == $user['password']){
                Session::init();
                Session::set('loggedIn',true);
                Session::set('userid',$user['id']);
                Session::set('username',$user['username']);
                Session::set('userType',$user['type']);
                if(Session::get('userType')=='Admin'){
                    $admin = $this->db->listWhere("id","admin","user_id='".$user['id']."'");
                    header('location: '.URL.'teacherHome');

                } else if(Session::get('userType')=='Teacher'){
                    $teacher = $this->db->listWhere("reg_no","teacher","user_id='".$user['id']."'");
                    header('location: '.URL.'teacherHome');

                } else if(Session::get('userType')=='Student'){
                    $student = $this->db->listWhere("reg_no","student","user_id='".$user['id']."'");
                    header('location: '.URL.'studentHome');

                } else if(Session::get('userType')=='Staff'){
                    $staff = $this->db->listWhere("reg_no","staff","user_id='".$user['id']."'");
                    header('location: '.URL.'teacherHome');

                }else if(Session::get('userType')=='Paper Marker'){
                    $papermarker = $this->db->listWhere("reg_no","paper_marker","user_id='".$user['id']."'");
                    header('location: '.URL.'teacherHome');
                }
                
	            exit;

        		} else{
                header('location: '.URL.'login');
            	}
        }
    		
    	} else{
    		header('location: '.URL.'login');
    	}
    }

}