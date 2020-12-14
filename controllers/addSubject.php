<?php

class addSubject extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    function index(){
        $this->view->subList = $this->model->listSubject();
    	$this->view->render('admin/addSubject');
    }
}