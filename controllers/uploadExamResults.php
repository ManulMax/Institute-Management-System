<?php

class uploadExamResults extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    function index(){
    	$this->view->classList = $this->model->listClasses($_SESSION["userid"]);
    	$this->view->userDetails = $this->model->listDetails($_SESSION["userid"]);
    	$this->view->render('teacher/uploadExamResults');
    }

    function addExam(){
    	$data = array();
        $data['topic'] = $_POST['exam'];
        $data['batch'] = $_POST['batch'];
        $data['date'] = $_POST['date'];

        $this->model->create($data,$_SESSION["userid"]);
        header('location: '.URL.'uploadExamResults');
    }
}