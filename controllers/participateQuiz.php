<?php

class participateQuiz extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    function index($id){
    	$this->view->userDetails = $this->model->listDetails($_SESSION["userid"]);
    	$this->view->questions = $this->model->listQuestions($id);
    	$this->view->studentSubject = $this->model->listStudentSubjects($_SESSION["userid"]);
        $this->view->timer = $this->model->listTime($id);
    	$this->view->render('student/participateQuiz');
    }

    

}
