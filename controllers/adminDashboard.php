<?php

class adminDashboard extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    function index(){

        $this->view->stuCount1  = $this->model->listStudentCount($_SESSION["userid"],"2020 A/L");
        $this->view->stuCount2  = $this->model->listPaidCount($_SESSION["userid"],"2021 A/L");
        $this->view->classCount = $this->model->listClassCount($_SESSION["userid"],"2022 A/L");
        $this->view->subCount   = $this->model->listTecCount($_SESSION["userid"],"Revision");


    	$this->view->render('admin/adminDashboard');
    }
}

