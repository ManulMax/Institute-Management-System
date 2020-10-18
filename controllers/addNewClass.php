<?php

class addNewClass extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    function index(){
    	$this->view->hallList = $this->model->listHalls();
    	$this->view->subjectList = $this->model->listSubjects();
    	$this->view->render('teacher/addNewClass');
    }

    function viewCurrentSchedules($hallName,$daySelected){
    	$temp = $this->model->listCurrentSchedules($hallName,$daySelected);
    	echo $temp;
    	$this->view->scheduleList = $this->model->listCurrentSchedules($hallName,$daySelected);
    	header('location: '.URL.'addNewClass');
    }
}