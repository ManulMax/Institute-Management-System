<?php

class addNewClass extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    function index(){
    	$this->view->hallList = $this->model->listHalls();
    	$this->view->subjectList = $this->model->listSubjects();
    	$this->view->scheduleList = $this->model->listCurrentSchedules("h1","Monday");
    	$this->view->render('teacher/addNewClass');
    }

    function viewCurrentSchedules($hallName,$daySelected){
    	$this->view->scheduleList = $this->model->listCurrentSchedules($hallName,$daySelected);
    	$this->view->render('teacher/addNewClass');
    }
}