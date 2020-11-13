<?php

class createQuiz extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    function index($batch){
        $this->view->classList = $this->model->listClasses($_SESSION["userid"]);
        $this->view->userDetails = $this->model->listDetails($_SESSION["userid"]);
        $this->view->batch = $batch;
        $this->view->render('teacher/createQuiz');
    }

    function create(){

        $data = array();

        $data['topic']=$_POST['topic'];
        $data['time_limit']=$_POST['time'];
        $data['ques']=$_POST['ques'];
        $data['ans1']=$_POST['ans1'];
        $data['ans2']=$_POST['ans2'];
        $data['ans3']=$_POST['ans3'];
        $data['ans4']=$_POST['ans4'];
        $data['ans5']=$_POST['ans5'];


        $this->model->create($data);
       // header('location: '.URL.'createQuiz');
    }
}