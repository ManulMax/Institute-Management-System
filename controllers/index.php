<?php

class index extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    function index(){
        $this->view->teacherList = $this->model->listAllTeachers();
        $this->view->subjectList = $this->model->listAllSubject();
        $this->view->classList = $this->model->listAllClass();

    	$this->view->render('index/index');
    }
}