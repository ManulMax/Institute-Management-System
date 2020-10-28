<?php

class Index extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    function index(){
    	$this->view->title = 'Home | Vidarsha';
    	$this->view->render('index/index');
    }
}