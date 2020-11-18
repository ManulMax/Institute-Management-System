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
            $pass = $_POST['password'];
            if(md5($pass) == $user['password']){
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
                        header('location: '.URL.'paperMarkerDashboard');
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
        $pwd = $_POST['current_passwd'];
        if(md5($pwd) == $_SESSION['password']){
            if ($_POST['new_passwd'] == $_POST['confirm_passwd']) {

                $new = $_POST['new_passwd'];

                $users = $this->db->update("user","password='".md5($new)."',flag=1","id=".$_SESSION['userid']);

                if(Session::get('userType')=='Admin'){
                    header('location: '.URL.'adminDashboard');

                } else if(Session::get('userType')=='Teacher'){
                    header('location: '.URL.'teacherHome');

                } else if(Session::get('userType')=='Student'){
                    header('location: '.URL.'studentHome');

                } else if(Session::get('userType')=='Staff'){
                    header('location: '.URL.'staffDashboard');

                }else if(Session::get('userType')=='Paper Marker'){
                    header('location: '.URL.'paperMarkerDashboard');
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


    public function pwChangeAfterLogin(){
        $pwd = $_POST['current_passwd'];
        if(md5($pwd) == $_SESSION['password']){
            if ($_POST['new_passwd'] == $_POST['confirm_passwd']) {

                $new = $_POST['new_passwd'];

                $users = $this->db->update("user","password='".md5($new)."',flag=1","id=".$_SESSION['userid']);

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
                header('location: '.URL.'login/renderPasswordChange?msg=Password mismatch');
            }
            exit;
        }else{
            header('location: '.URL.'login/renderPasswordChange?msg=Incorrect current password');
        }
        exit;           

    }





    public function checkAccountExist($username){
        if ($this->db->listWhere("*","user", "username='$username'") == null) {
            return false;
        } else {
            return true;
        }
    }


    function createRecord($username, $token){
        $this->db->insert("password_reset","(username,token)","('".$username."','".$token."')");
    }


    function checkToken($username, $token){
        if ($this->db->listWhere("username","password_reset", "username='$username' AND token='$token'") == null) {
            return false;
        } else {
            return true;
        }
    }

    function updatePassword($data){
        $username = $data['username'];
        if ($data['password'] == $data['confpasswd']) {
            $this->db->update('user', "password='".$data['password']."'","username='$username'");
        }else{
                header('location: '.URL.'login/renderPasswordChange?msg=Password mismatch');
        }
        exit;
    }

    

}