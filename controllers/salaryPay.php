<?php

class salaryPay extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    function index(){
        $this->view->tecList = $this->model->listTeacher();
    	$this->view->render('admin/salaryPay');
    }
}