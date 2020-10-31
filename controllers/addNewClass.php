<?php

class addNewClass extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    function index(){
        $this->view->classList = $this->model->listClasses($_SESSION["userid"]);
        $this->view->hallList = $this->model->listHalls();
        $this->view->scheduleList = $this->model->listSchedules();
        $this->view->render('teacher/addNewClass');
    }

    function viewCurrentSchedules($hallName,$daySelected){
        $this->view->scheduleList = $this->model->listCurrentSchedules($hallName,$daySelected);
        header('location: '.URL.'addNewClass');
    }
}