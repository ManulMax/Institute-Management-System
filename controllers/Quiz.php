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
        $this->view->qlist = $this->model->listQuizzes($id);
        $this->view->render('teacher/quizList');
    }

    function renderQuizPage(){
        $this->view->classList = $this->model->listClasses($_SESSION["userid"]);
        $this->view->userDetails = $this->model->listDetails($_SESSION["userid"]);
        $this->view->render('teacher/createQuiz');
    } 

    function renderViewQuiz($id){
        $this->view->classList = $this->model->listClasses($_SESSION["userid"]);
        $this->view->userDetails = $this->model->listDetails($_SESSION["userid"]);
        $this->view->questions = $this->model->listQuestions($id);
        $this->view->quiz = $this->model->getQuiz($id);
        $this->view->render('teacher/viewQuiz');
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

  /*  function delete($quizId){
        $result=$this->model->delete($quizId);
        if($result == 1){
            header('location: '.URL.'Quiz?alert1=success');
        }else{
            header('location: '.URL.'Quiz?alert1=fail');
        }
    } */

    // ------------------------ student quiz -------------------------------------

   /* function renderStuQuizLandingPage($id,$batch){
        $this->view->classList = $this->model->listClasses($_SESSION["userid"]);
        $this->view->userDetails = $this->model->listDetails($_SESSION["userid"]);
        $this->view->batch = $batch;
        Session::set('classid',$id);
        Session::set('batch',$batch);
        $this->view->qlist = $this->model->listQuizzes($id);
        $this->view->render('teacher/quizList');
    } */
}