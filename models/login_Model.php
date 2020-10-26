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
                Session::set('username',$user['username']);
                Session::set('userType',$user['type']);
                if(Session::get('userType')=='Admin'){
                    header('location: '.URL.'teacherHome');
                } else if(Session::get('userType')=='Teacher'){
                    header('location: '.URL.'teacherHome');
                } else if(Session::get('userType')=='Student'){
                    header('location: '.URL.'studentHome');
                } else if(Session::get('userType')=='Staff'){
                    header('location: '.URL.'teacherHome');
                }else if(Session::get('userType')=='Paper Marker'){
                    header('location: '.URL.'teacherHome');
                }
                
	            exit;

        		} else{
                header('location: ../login');
            	}
        }
    		
    	} else{
    		header('location: ../login');
    	}
    }

}