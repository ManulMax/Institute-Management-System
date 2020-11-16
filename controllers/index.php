<?php

class index extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    function index(){
        $this->view->title = 'Home | Vidarsha';
        $this->view->classList = $this->model->listTodayClass();
        
    	$this->view->render('index/index');
    }
}