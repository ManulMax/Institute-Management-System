<?php

class adminDashboard extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    function index(){

        $this->view->stuCount  = $this->model->listStudentCount();
        $this->view->classCount  = $this->model->listClassCount();
        $this->view->subCount = $this->model->listSubCount();
        $this->view->tecCount   = $this->model->listTecCount();

        //to display class count in cahart
        // $this->view->sum1 = $this->model->classCount();
        // $this->view->sum2 = $this->model->classCount();
        // $this->view->sum3 = $this->model->classCount();
        // $this->view->sum4 = $this->model->classCount();
        $arr = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");

         $count = "";
         for ($i=0; $i < count($arr); $i++) { 
                $result = $this->model->classCount($arr[$i]);
                $row = mysqli_fetch_assoc($result);
                $count .= "'".$row['sum']."',";
             }
         $this->view->dailyCount=substr($count, 0, -1);
    	 $this->view->render('admin/adminDashboard');
    }
}

