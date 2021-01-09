<?php

class collectClassFees extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    function index(){
    	
    	$this->view->userDetails = $this->model->listDetails($_SESSION["userid"]);
    	$this->view->render('staff/collectClassFees');
    }

    function renderEnrollStudent($reg,$name){
        $this->view->stuName = $name;
        $this->view->stuReg = $reg;
        $this->view->render('staff/collectClassFees');
    }

    function create(){

        $data = array();
        $data['reg_no'] = $_POST['reg_no'];
        $data['fname'] = $_POST['fname'];
        


        $this->model->create($data);
        header('location: '.URL.'collectClassFees');
    }

    function search(){
        $reg = $_POST['regNo'];
    	$stuDet = $this->model->liststuDetails($reg);
        $row = mysqli_fetch_assoc($stuDet);
        $this->renderEnrollStudent($reg,$row['fname']);
    }

    
}