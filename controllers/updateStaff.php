<?php

class updateStaff extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    function index(){
        $this->view->staffList = $this->model->listStaff();

    	$this->view->render('admin/updateStaff');
    }
}