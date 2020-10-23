<?php

class materials extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    function index(){
    	$this->view->materialList = $this->model->listMaterials();
    	$this->view->render('teacher/materials');
    }

    function create(){

    	$data = array();

    	$data['heading']=$_POST['heading'];
		$data['name']=$_POST['name'];
		$data['description']=$_POST['description'];
		$data['filename']=$_FILES['file']['name'];
		$data['temp']=$_FILES['file']['tmp_name'];


        $this->model->create($data);
        header('location: '.URL.'materials');
    }
}