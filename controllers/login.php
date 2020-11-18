<?php

class login extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    function index(){
        
    	$this->view->render('login');
    }

    function renderForgotPw(){
        $this->view->render('forgotPassword');
    }

    function forgotPassword(){
        $username = $_POST['user-email'];
        if($this->model->checkAccountExist($username)){
            $token = $this->generateRandomString(97);
            $this->model->createRecord($username, $token);
            $this->sendResetPasswordEmail($username, $token);
        } else {
            // the input username is invalid
            // do not display a message saying 'username as invalid'
            // that is a security issue. Instead,
            // sleep for 2 seconds to mimic email sending duration
            sleep(2);
        }
    }

    function generateRandomString($length = 10){
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i ++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    function sendResetPasswordEmail($to, $token){
        $resetUrl = '<a href="'.URL.'login/resetPassword/'.$to.'/'.$token.'">here</a>';
        $emailBody = 'Hi, </br>To reset your password, click ' . $resetUrl;
        $subject = 'Reset Password';
        $header = "From: 2018is055@stu.ucsc.cmb.ac.lk\r\nContent-Type: text/html;";
        if(mail($to, $subject, $emailBody, $header)){
            echo "<h1 style='text-align:center;margin-top:100px;'>Email sent with reset link !</h1>";
        } else{ echo 'false';}
    }

    function resetPassword($username,$token){
        if($this->model->checkToken($username,$token)){
            $this->view->username = $username;
            $this->view->render('resetPassword');
        } else{
            echo 'incorrect token';
        }

    }

    function updatePassword(){
        $data = array();
        $data['username'] = $_POST['username'];
        $data['password'] = md5($_POST['new_passwd']);

        $this->model->updatePassword($data);

         echo "<h1 style='text-align:center;margin-top:100px;'>Password Updated!</h1>";
         echo '<a href="'.URL.'login" style="margin-left:48%;text-decoration:none;background-color:green;color:white;padding:20px;">Login</a>';

    }


    function loginUser(){

        $this->model->loginUser();
    }

    function passwordChange(){

        $this->model->passwordChange();
    }

    function logout(){

        Session::destroy();
        header('location: '.URL.'login');
    }

    function renderPasswordChange(){
        $this->view->render('changePassword');
    }

    function pwChangeAfterLogin(){

        $this->model->pwChangeAfterLogin();
    }
}