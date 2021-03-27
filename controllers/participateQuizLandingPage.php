<?php

class participateQuizLandingPage extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    function index(){
    	$this->view->userDetails = $this->model->listDetails($_SESSION["userid"]);
    	$this->view->studentSubject = $this->model->listStudentSubjects($_SESSION["userid"]);
    	$this->view->render('student/participateQuizLandingPage');
    }
}