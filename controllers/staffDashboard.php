<?php

class staffDashboard extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    function index(){
    	
    	$this->view->schedules = $this->model->listSchedules();
    	$this->view->userDetails = $this->model->listDetails($_SESSION["userid"]);

        /*student count for cards*/
        $this->view->stuCount1 = $this->model->listStudentCount(date("Y")."AL");
        $this->view->stuCount2 = $this->model->listStudentCount((date("Y")+1)."AL");
        $this->view->stuCount3 = $this->model->listStudentCount((date("Y")+2)."AL");
        $this->view->stuCount4 = $this->model->listStudentCount("Revision");
        /*Overall student count*/
        $this->view->stuCount5 = $this->model->listALLStudentCount();

        /*attendance for chart*/
        $this->view->sum1 = $this->model->attendanceCount("2021 AL");
        $this->view->sum2 = $this->model->attendanceCount("2022 AL");
        $this->view->sum3 = $this->model->attendanceCount("2023 AL");
        $this->view->sum4 = $this->model->attendanceCount("Revision");

        /*overall attendance*/
        $this->view->overallAttendance = $this->model->OverallAttendance();

    	$this->view->render('staff/staffDashboard');
    }

    
} 