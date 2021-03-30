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
        Session::set('subjectname',$pieces[0]);
        Session::set('batchname',$pieces[1]);
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

        $date1 = $row['month'];

        $ts1 = strtotime($date1);

        $month1 = date('m', $ts1);
        $month2 = date('m');

        $this->view->diff = $month2 > $month1 ? ($month2 - $month1) : ($month2 - $month1 +12);

        $this->view->render('staff/markAttendance');
    }

    function create(){
 
        $data = array();
        $data['stu_reg_no'] = $_POST['regNum'];
        $data['batchname'] = $_SESSION['batchname'];
        $data['subjectname'] = $_SESSION['subjectname'];

        $this->view->subjectname = $_SESSION['subjectname'];
        $this->view->batchname = $_SESSION['batchname'];

        $result1=$this->model->checkPresence($data);

        if($result1 == 1){
            $this->view->alert1="fail";
            $this->view->render('staff/markAttendance');
        }else if($result1 == 0){
            $result2=$this->model->create($data);
            if($result2==1){
                $this->view->alert2="success";
            }else{
                $this->view->alert2="fail";
            }
            $this->view->render('staff/markAttendance');
        }

    }

    function search($subjectname,$batchname){
        $reg = $_POST['regNo'];
    	$stuDet = $this->model->listStuDetails($reg,$subjectname,$batchname);
        $row = mysqli_fetch_assoc($stuDet);
        $this->renderMarkAttendance($subjectname,$batchname,$reg,$row);
    }

    
}  