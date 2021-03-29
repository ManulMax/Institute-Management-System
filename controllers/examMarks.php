<?php

class examMarks extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    function index($name,$batch){
    	$this->view->userDetails = $this->model->listDetails($_SESSION["userid"]);
        $this->view->classList = $this->model->listClasses($_SESSION["userid"]);
        $this->view->studentSubject = $this->model->listStudentSubjects($_SESSION["userid"]);
        $this->view->resultSheetList = $this->model->listResultSheet($name,$batch);

      	$this->view->render('student/examMarks');
    }

    
}