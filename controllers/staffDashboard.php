<?php

class staffDashboard extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    function index(){
    	
    	$this->view->schedules = $this->model->listSchedules();
    	$this->view->userDetails = $this->model->listDetails($_SESSION["userid"]);

         $this->view->stuCount1 = $this->model->listStudentCount("2020 A/L");
        $this->view->stuCount2 = $this->model->listStudentCount("2021 A/L");
        $this->view->stuCount3 = $this->model->listStudentCount("2022 A/L");
        $this->view->stuCount4 = $this->model->listStudentCount("Revision");
        $this->view->stuCount5 = $this->model->listALLStudentCount();

    	$this->view->render('staff/staffDashboard');
    }

    
}