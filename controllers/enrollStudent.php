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

    function renderEnrollStudent($reg,$name,$image){
        $this->view->stuName = $name;
        $this->view->stuReg = $reg;
         $this->view->image = $image;
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
        $reg = $_POST['regNo'];
    	$stuDet = $this->model->liststuDetails($reg);
        $row = mysqli_fetch_assoc($stuDet);
        $this->renderEnrollStudent($reg,$row['fname'],$row['image']);
    }
}