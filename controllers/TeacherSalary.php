<?php

class TeacherSalary extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    function index(){
    	$this->view->classList = $this->model->listClasses($_SESSION["userid"]);
    	$this->view->userDetails = $this->model->listDetails($_SESSION["userid"]);
    	$this->view->salary = $this->model->listSalaryDetails($_SESSION["userid"]);
        $this->view->classSal1 = $this->model->listClassWissSalary($_SESSION["userid"],date("Y")."AL");
        $this->view->classSal2 = $this->model->listClassWissSalary($_SESSION["userid"],(date("Y")+1)."AL");
        $this->view->classSal3 = $this->model->listClassWissSalary($_SESSION["userid"],(date("Y")+2)."AL");
        $this->view->classSal4 = $this->model->listClassWissSalary($_SESSION["userid"],"Revision");
    	$this->view->render('teacher/salaryDetails');
    }
        
}