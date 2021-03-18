<?php

class updateStudent extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    function index(){
        $this->view->stuList = $this->model->listStudent();
    	$this->view->render('admin/updateStudent');
    }
}