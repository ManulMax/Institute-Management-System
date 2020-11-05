<?php

class classFeesLandingPage extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    function index(){

    	 $this->view->subjectList = $this->model->listSubjects();
    	$this->view->schedules = $this->model->listSchedules($_SESSION["userid"]);
    	$this->view->render('staff/classFeesLandingPage');
    }

    
}