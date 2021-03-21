<?php

class participateQuiz extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    function index(){
    	$this->view->userDetails = $this->model->listDetails($_SESSION["userid"]);
    	$this->view->questions = $this->model->listQuestions($_SESSION["userid"]);
    	$this->view->render('student/participateQuiz');
    }
}