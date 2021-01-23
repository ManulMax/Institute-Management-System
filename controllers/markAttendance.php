<?php

class markAttendance extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    function index(){
    	$this->view->userDetails = $this->model->listDetails($_SESSION["userid"]);
    	$this->view->render('staff/markAttendance');
    }

     function renderMarkAttendance($reg,$name,$date,$amount){
        $this->view->stuName = $name;
        $this->view->stuReg = $reg;
        $this->view->stuLastPaymentDate = $date;
        $this->view->stuLastPaidAmount = $amount;
        $this->view->render('staff/markAttendance');
    }

    function create(){
 
        $data = array();
        $data['stu_reg_no'] = $_POST['regNum'];
       
        $this->model->create($data);

        //get details needed in attendance landing page.(functions called in attendanceLandingPage/index)

        header('location: '.URL.'markAttendance');
    }

    function search(){
        $reg = $_POST['regNo'];
    	$stuDet = $this->model->listStuDetails($reg);
        $row = mysqli_fetch_assoc($stuDet);
        $this->renderMarkAttendance($reg,$row['fname'],$row['date'],$row['amount']);
    }

    
} 