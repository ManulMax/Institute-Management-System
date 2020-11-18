<?php

class studentHome extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    function index(){
    	$this->view->schedules = $this->model->listSchedules();
    	$this->view->teacherList = $this->model->listTeacher();
    	 $this->view->subjectList = $this->model->listSubjects();
    	$this->view->userDetails = $this->model->listDetails($_SESSION["userid"]);
      	$this->view->render('student/studentHome');
    }
}