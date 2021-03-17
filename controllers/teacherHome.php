<?php

class teacherHome extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    function index(){
        $this->view->classList = $this->model->listClasses($_SESSION["userid"]);
        $this->view->userDetails = $this->model->listDetails($_SESSION["userid"]);

        //to display student count in cards
        $this->view->stuCount1 = $this->model->listStudentCount($_SESSION["userid"],date("Y")."AL");
        $this->view->stuCount2 = $this->model->listStudentCount($_SESSION["userid"],(date("Y")+1)."AL");
        $this->view->stuCount3 = $this->model->listStudentCount($_SESSION["userid"],(date("Y")+2)."AL");
        $this->view->stuCount4 = $this->model->listStudentCount($_SESSION["userid"],"Revision");
        
        //for attendance chart
        $this->view->sum1 = $this->model->attendanceCount($_SESSION["userid"],date("Y")."AL");
        $this->view->sum2 = $this->model->attendanceCount($_SESSION["userid"],(date("Y")+1)."AL");
        $this->view->sum3 = $this->model->attendanceCount($_SESSION["userid"],(date("Y")+2)."AL");
        $this->view->sum4 = $this->model->attendanceCount($_SESSION["userid"],"Revision");

        $this->view->schedules = $this->model->listSchedules($_SESSION["userid"]);
        $this->view->render('teacher/teacherHome');
    }

    function getMaterials($id){
        $this->view->materialList = $this->model->listMaterials($id);
        $this->view->render('teacher/materials');
    }
} 