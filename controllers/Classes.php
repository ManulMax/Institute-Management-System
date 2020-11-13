<?php

class Classes extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    function index(){
        $this->view->classList = $this->model->listClasses($_SESSION["userid"]);
        $this->view->userDetails = $this->model->listDetails($_SESSION["userid"]);
        $this->view->hallList = $this->model->listHalls();
        $this->view->scheduleList = $this->model->listSchedules();
        $this->view->render('teacher/addNewClass');
    }

}