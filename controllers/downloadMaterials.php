<?php

class downloadMaterials extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    function index(){
    	$this->view->materialList = $this->model->listMaterials();
    	$this->view->render('student/downloadMaterials');
    }
}