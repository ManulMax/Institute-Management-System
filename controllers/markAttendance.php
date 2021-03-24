<?php

class markAttendance extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    function index(){
        $class = $_POST['class'];
        $pieces = explode(" ",$class);
        $this->view->subjectname = $pieces[0];
        $this->view->batchname = $pieces[1];
    	$this->view->userDetails = $this->model->listDetails($_SESSION["userid"]);
    	$this->view->render('staff/markAttendance');
    }

     function renderMarkAttendance($subjectname,$batchname,$reg,$row){
        $this->view->subjectname = $subjectname;
        $this->view->batchname = $batchname;
        $this->view->stuName = $row['fname'];
        $this->view->stuReg = $reg;
        $this->view->image = $row['image'];
        $this->view->stuLastPaymentDate = $row['date'];
        $this->view->stuLastPaymentMonth = $row['month'];
        $this->view->stuLastPaidAmount = $row['amount'];

        $date1 = $row['date'];
        $date2 = date("Y/m/d");

        $ts1 = strtotime($date1);
        $ts2 = strtotime($date2);

        $year1 = date('Y', $ts1);
        $year2 = date('Y', $ts2);

        $month1 = date('m', $ts1);
        $month2 = date('m', $ts2);

        $this->view->diff = (($year2 - $year1) * 12) + ($month2 - $month1);

        $this->view->render('staff/markAttendance');
    }

    function create(){
 
        $data = array();
        $data['stu_reg_no'] = $_POST['regNum'];
       
        $this->model->create($data);

        //get details needed in attendance landing page.(functions called in attendanceLandingPage/index)

        header('location: '.URL.'markAttendance');
    }

    function search($subjectname,$batchname){
        $reg = $_POST['regNo'];
    	$stuDet = $this->model->listStuDetails($reg);
        $row = mysqli_fetch_assoc($stuDet);
        $this->renderMarkAttendance($subjectname,$batchname,$reg,$row);
    }

    
}  