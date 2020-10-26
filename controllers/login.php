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
}