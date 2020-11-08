<?php

class login_Model extends Model{

    public function __construct(){
     	parent::__construct();
    }

    public function loginUser(){

    	$users = $this->db->listWhere("*","user","username='".$_POST['username']."'");

    	if($users){
    		foreach ($users as $user) {
                
           // if(password_verify($_POST['password'], $user['password'])){     

            if($_POST['password'] == $user['password']){
                Session::init();
                Session::set('loggedIn',true);
                Session::set('userid',$user['id']);
                Session::set('username',$user['username']);
                Session::set('password',$user['password']);
                Session::set('userType',$user['type']);

                if ($user['flag']==0) {
                    header('location: '.URL.'login?status=new');
                }else if($user['flag']==1){

                    if(Session::get('userType')=='Admin'){
                        header('location: '.URL.'adminDashboard');

                    } else if(Session::get('userType')=='Teacher'){
                        header('location: '.URL.'teacherHome');

                    } else if(Session::get('userType')=='Student'){
                        header('location: '.URL.'studentHome');

                    } else if(Session::get('userType')=='Staff'){
                        header('location: '.URL.'staffDashboard');

                    }else if(Session::get('userType')=='Paper Marker'){
                        header('location: '.URL.'teacherHome');
                    }else{
                        header('location: '.URL.'login');
                    }
                }else{
                    header('location: '.URL.'login');
                }
                
    		}else{
                header('location: '.URL.'login?msg=Incorrect password');
            }
            exit;  		
    	}
    }
    header('location: '.URL.'login?msg=Incorrect username');
    exit;

}


    public function passwordChange(){
        if($_POST['current_passwd'] == $_SESSION['password']){
            if ($_POST['new_passwd'] == $_POST['confirm_passwd']) {

                $users = $this->db->update("user","password='".$_POST['new_passwd']."',flag=1","id=".$_SESSION['userid']);

                if(Session::get('userType')=='Admin'){
                    header('location: '.URL.'adminDashboard');

                } else if(Session::get('userType')=='Teacher'){
                    header('location: '.URL.'teacherHome');

                } else if(Session::get('userType')=='Student'){
                    header('location: '.URL.'studentHome');

                } else if(Session::get('userType')=='Staff'){
                    header('location: '.URL.'staffDashboard');

                }else if(Session::get('userType')=='Paper Marker'){
                    header('location: '.URL.'teacherHome');
                }
            }else{
                header('location: '.URL.'login?status=new&msg=Password mismatch');
            }
            exit;
        }else{
            header('location: '.URL.'login?status=new&msg=Incorrect current password');
        }
        exit;
        
                

        }
    

}