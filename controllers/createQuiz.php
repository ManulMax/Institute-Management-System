<?php

class createQuiz extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    function index(){
    	$this->view->render('teacher/createQuiz');
    }
}