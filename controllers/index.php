<?php

class Index extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    function index(){
        $this->view->title = 'Home | Vidarsha';
        // $this->view->classList = $this->model->listTodayClass();
        // $this->view->userDetails = $this->model->listDetails($_SESSION["userid"]);
    	$this->view->render('index/index');
    }
}