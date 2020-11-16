<?php

class index extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    function index(){
        $this->view->teacherList = $this->model->listAllTeachers();
        // $this->view->userDetails = $this->model->listDetails($_SESSION["userid"]);
    	$this->view->render('index/index');
    }
}