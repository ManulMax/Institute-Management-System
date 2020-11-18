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


    	$this->view->render('admin/adminDashboard');
    }
}

