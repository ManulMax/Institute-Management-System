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

//chart 1 
        $arr = array("01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12");

        $register = "";
        for ($i=0; $i < count($arr); $i++) { 
               $date=date('Y')."-".$arr[$i];
               $result = $this->model->getRegisterCount($date);
               $row = mysqli_fetch_assoc($result);
               $register .= "'".$row['sum']."',";
            }
        $this->view->register=substr($register, 0, -1);


//chart 2

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

