<?php

class login extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    function index(){
        
    	$this->view->render('login');
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
}