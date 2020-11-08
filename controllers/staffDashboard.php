<?php

class staffDashboard extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    function index(){
    	
    	$this->view->schedules = $this->model->listSchedules($_SESSION["userid"]);
    	$this->view->userDetails = $this->model->listDetails($_SESSION["userid"]);
    	$this->view->render('staff/staffDashboard');
    }

    
}