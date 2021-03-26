<?php

class adminDashboard extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    function index(){

        $this->view->stuCount  = $this->model->listStudentCount();
        $this->view->classCount  = $this->model->listClassCount();
        $this->view->subCount = $this->model->listSubCount();
        $this->view->tecCount   = $this->model->listTecCount();

        //to display class count in cahart
        $this->view->sum1 = $this->model->classCount();
        $this->view->sum2 = $this->model->classCount();
        $this->view->sum3 = $this->model->classCount();
        $this->view->sum4 = $this->model->classCount();

    	$this->view->render('admin/adminDashboard');
    }
}

