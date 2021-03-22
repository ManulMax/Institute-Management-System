<?php

class Quiz extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    function index($id,$batch){
        $this->view->classList = $this->model->listClasses($_SESSION["userid"]);
        $this->view->userDetails = $this->model->listDetails($_SESSION["userid"]);
        $this->view->batch = $batch;
        Session::set('classid',$id);
        Session::set('batch',$batch);
        $this->view->render('teacher/quizList');
    }

    function renderQuizPage(){
        $this->view->classList = $this->model->listClasses($_SESSION["userid"]);
        $this->view->userDetails = $this->model->listDetails($_SESSION["userid"]);
        $this->view->render('teacher/createQuiz');
    }

    function create(){
        $itemCount = count($_POST["ques"]);
        $itemValues=0;
        $topic=$_POST['topic'];
        $timeLimit=$_POST['time'];

        $this->model->saveQuiz($topic,$timeLimit);

        for($i=0;$i<$itemCount;$i++) {
            $question=$_POST['ques'][$i];
            $ans1=$_POST['ans1'][$i];
            $ans2=$_POST['ans2'][$i];
            $ans3=$_POST['ans3'][$i];
            $ans4=$_POST['ans4'][$i];
            $ans5=$_POST['ans5'][$i];
            $choice=$_POST['choice'][$i];
            $qno = $i + 1;
          //  $correctAns=$_POST['choice'][$i];
            $this->model->saveQuestions($topic,$qno,$question,$ans1,$ans2,$ans3,$ans4,$ans5,$choice);
        }

        header('location: '.URL.'createQuiz/renderQuizPage');
    }
}