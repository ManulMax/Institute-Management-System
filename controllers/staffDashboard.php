<?php

class staffDashboard extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    function index(){
    	
    	$this->view->render('staff/staffDashboard');
    }

    
}