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

    function renderCollectClassFees($reg,$name,$image,$month){
        $this->view->stuName = $name;
        $this->view->stuReg = $reg;
        $this->view->image = $image;
        $this->view->stuLastPaidMonth = $month;
        $this->view->userDetails = $this->model->listDetails($_SESSION["userid"]);
        $this->view->subjectList = $this->model->listSubjects($reg);
        $this->view->fees = $this->model->listFees($reg);
        $this->view->render('staff/collectClassFees');
    }
   
       

     function create(){

        $data = array();
        $data['stu_reg_no'] = $_POST['regNum'];
        $data['month'] = $_POST['currentPaymentMonth'];
        $data['amount'] = $_POST['paid-amount'];
        $data['subject'] = $_POST['subject'];
        $data['batch'] = $_POST['batch'];
    //   echo " ".$data['stu_reg_no']." ".$data['month']." ".$data['amount']." ".$data['subject']." ".$data['batch'];
        $this->model->create($data);
 
        //get details needed in attendance landing page.(functions called in attendanceLandingPage/index)

        header('location: '.URL.'collectClassFees');
    }


    function search(){
        $reg = $_POST['regNo'];
    	$stuDet = $this->model->listStuDetails($reg);
        $row = mysqli_fetch_assoc($stuDet);
        $this->renderCollectClassFees($reg,$row['fname'],$row['image'],$row['month']);
              

    }

    
}