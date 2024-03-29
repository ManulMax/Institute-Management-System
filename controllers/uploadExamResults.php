<?php

class uploadExamResults extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    function index($id,$batch){
    	$this->view->classList = $this->model->listClasses($_SESSION["userid"]);
    	$this->view->userDetails = $this->model->listDetails($_SESSION["userid"]);
    	$this->view->exams = $this->model->listExams($id,$_SESSION["userid"]);
    	$this->view->classid = $id;
        $this->view->batch = $batch;
    	$this->view->render('teacher/uploadExamResults');
    }

    function addExam($classID,$batch){
    	$data = array();
        $data['topic'] = $_POST['exam'];
        $data['batch'] = $batch;
        $data['date'] = $_POST['date'];

        $result=$this->model->create($data,$_SESSION["userid"]);
        if($result == 1){
            header('location: '.URL.'uploadExamResults/index/'.$classID.'/'.$batch.'?alert1=success');
        }else{
            header('location: '.URL.'uploadExamResults/index/'.$classID.'/'.$batch.'?alert1=fail');
        }
    }

    function addResultsheet($classID,$batch){
        $data = array();
        $data['filename']=$_FILES['uploadFile']['name'];
        $data['temp']=$_FILES['uploadFile']['tmp_name'];
        $data['exam']=$_POST['res-exam'];
        $result=$this->model->addResultsheet($data,$_SESSION["userid"]);

        if($result == 1){
            header('location: '.URL.'uploadExamResults/index/'.$classID.'/'.$batch.'?alert2=success');
        }else{
            header('location: '.URL.'uploadExamResults/index/'.$classID.'/'.$batch.'?alert2=fail');
        }
    }

}