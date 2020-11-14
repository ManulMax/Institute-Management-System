<?php

class prepareResultSheet extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    function index(){
    	$this->view->classList = $this->model->listTeacherClasses($_SESSION["userid"]);
    	$this->view->userDetails = $this->model->listPmDetails($_SESSION["userid"]);
    	$this->view->render('paperMarker/prepareResultSheet');
    }

    
}