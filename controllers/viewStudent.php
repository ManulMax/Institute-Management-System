<?php

class viewStudent extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    function index(){
    	

    	
    	$this->view->subjectList = $this->model->listSubjects();
    	$this->view->stuList = $this->model->listStudent();
    	$this->view->render('staff/viewStudent');
    }

    
}
