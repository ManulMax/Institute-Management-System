<?php

class login extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    function index(){
    	$this->view->render('login');
    }
<<<<<<< HEAD
=======

    function loginUser(){

        $this->model->loginUser();
    }
>>>>>>> ff8e740880a8a8aebcbe0b72f208abf27a1a1613
}