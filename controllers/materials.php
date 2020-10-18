<?php

class materials extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    function index(){
    	$this->view->render('teacher/materials');
    }
}