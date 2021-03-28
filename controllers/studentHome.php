<?php

class studentHome extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    function index(){
    	$this->view->schedules = $this->model->listSchedules($_SESSION["userid"]);
    	$this->view->userDetails = $this->model->listDetails($_SESSION["userid"]);
        $this->view->classList = $this->model->listClasses($_SESSION["userid"]);
        $this->view->studentSubject = $this->model->listStudentSubjects($_SESSION["userid"]);

         $arr = array("01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12");

         $attendance = "";
         for ($i=0; $i < count($arr); $i++) { 
                $date=date('Y')."-".$arr[$i];
                $result = $this->model->getAttendanceCount($date,$_SESSION["userid"]);
                $row = mysqli_fetch_assoc($result);
                $attendance .= "'".$row['sum']."',";
             }
         $this->view->attendance=substr($attendance, 0, -1);
         

      	$this->view->render('student/studentHome');
    }
}