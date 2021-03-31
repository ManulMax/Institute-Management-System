<?php

class index extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    function index(){
        $this->view->teacherList = $this->model->listAllTeachers();
        $this->view->subjectList = $this->model->listAllSubject();

        $date = date('Y-m-d');
        $today = date('l', strtotime($date));
        $this->view->classList = $this->model->listAllClass($today);
        $this->view->batchList = $this->model->listBatch($today);
        $this->view->timeList = $this->model->listClassTime($today);

    	$this->view->render('index/index');
    }
}