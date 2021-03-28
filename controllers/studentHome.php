<?php

class studentHome extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    function index(){
    	$this->view->schedules = $this->model->listSchedules();
    	$this->view->teacherList = $this->model->listTeacher();
    	 $this->view->subjectList = $this->model->listSubjects();
    	$this->view->userDetails = $this->model->listDetails($_SESSION["userid"]);
        $this->view->classList = $this->model->listClasses($_SESSION["userid"]);
         $this->view->studentSubject = $this->model->listStudentSubjects($_SESSION["userid"]);

         $arr = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
         $attendance = "";
         for ($i=0; $i < count($arr); $i++) { 
             $result = $this->model->getAttendanceCount($arr[$i],$_SESSION["userid"]);
             $row = mysqli_fetch_assoc($result);
             $attendance .= "'".$row['sum']."',";
         }
         $this->view->attendance=substr($attendance, 0, -1);

      	$this->view->render('student/studentHome');
    }
}