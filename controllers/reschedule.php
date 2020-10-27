<?php

class reschedule extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    function index(){
    	$this->view->hallList = $this->model->listHalls();
        $this->view->scheduleList = $this->model->listSchedules();
    	$this->view->render('teacher/reschedule');
    }
}