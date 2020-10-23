<?php

class staffRegistration extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    function index(){
    	$this->view->render('admin/staffRegistration');
    }
}
