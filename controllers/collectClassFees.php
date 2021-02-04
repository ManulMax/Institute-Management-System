<?php

class collectClassFees extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    function index(){
    	
    	$this->view->userDetails = $this->model->listDetails($_SESSION["userid"]);
        $this->view->subjectList = $this->model->listSubjects();
    	$this->view->render('staff/collectClassFees');
    }

    function renderCollectClassFees($reg,$name,$image){
        $this->view->stuName = $name;
        $this->view->stuReg = $reg;
        $this->view->image = $image;
        $this->view->userDetails = $this->model->listDetails($_SESSION["userid"]);
        $this->view->subjectList = $this->model->listSubjects();
        $this->view->render('staff/collectClassFees');
    }
 
    

     function create(){
 
        $data = array();
        $data['stu_reg_no'] = $_POST['regNum'];
        $data['date'] = $_POST['payment-date'];
        $data['amount'] = $_POST['paid-amount'];
       
        $this->model->create($data);

        //get details needed in attendance landing page.(functions called in attendanceLandingPage/index)

        header('location: '.URL.'collectClassFees');
    }


    function search(){
        $reg = $_POST['regNo'];
    	$stuDet = $this->model->liststuDetails($reg);
        $row = mysqli_fetch_assoc($stuDet);
        $this->renderCollectClassFees($reg,$row['fname'],$row['image']);
    }

    
}