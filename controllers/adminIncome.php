<?php

class adminIncome extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    function index(){
    	$this->view->render('admin/adminIncome');
    }

}

