<?php

class salaryDetails extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    function index(){
    	$this->view->render('teacher/salaryDetails');
    }
}