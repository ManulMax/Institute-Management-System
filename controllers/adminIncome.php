<?php

class adminIncome extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    function index(){
        $this->view->classList = $this->model->listClass();
        $this->view->incomeData = $this->model->listIncome();
    	$this->view->render('admin/adminIncome');
    

    //chart 1

    // $arr = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");

    // $count = "";
    // for ($i=0; $i < count($arr); $i++) { 
    //        $result = $this->model->classCount($arr[$i]);
    //        $row = mysqli_fetch_assoc($result);
    //        $count .= "'".$row['sum']."',";
    //     }
    // $this->view->dailyCount=substr($count, 0, -1);
    // $this->view->render('admin/adminDashboard');
    
    }

}

