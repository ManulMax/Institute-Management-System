<?php

class updateStaff extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    function index(){
    	$this->view->render('admin/updateStaff');
    }
}