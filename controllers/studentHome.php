<?php

class studentHome extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    function index(){
      	$this->view->render('student/studentHome');
    }
}