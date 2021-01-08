<?php

class enrollStudent extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    function index(){
    	$this->view->userDetails = $this->model->listDetails($_SESSION["userid"]);
    	$this->view->render('staff/enrollStudent');
    }

    function create(){

        $data = array();
        $data['reg_no'] = $_POST['reg_no'];
        $data['fname'] = $_POST['fname'];
        


        $this->model->create($data);
        header('location: '.URL.'enrollStudent');
    }

    function search(){
    	$this->view->stuDet = $this->model->liststuDetails($_POST['regNo']);
    }
}