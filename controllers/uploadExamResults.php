<?php

class uploadExamResults extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    function index(){
    	$this->view->classList = $this->model->listClasses($_SESSION["userid"]);
    	$this->view->render('teacher/uploadExamResults');
    }
}