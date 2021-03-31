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

        $qlist = $this->model->listQuizzes($id);
        $i=0;
        while($row=mysqli_fetch_assoc($qlist)){
            $dataList[$i][0]=$row['id'];
            $dataList[$i][1]=$row['date'];
            $dataList[$i][2]=$row['topic'];
            $dataList[$i][3]=$row['time_hours'];
            $dataList[$i][4]=$row['time_minutes'];
            $dataList[$i][5]=$row['class_id'];
            $dataList[$i][6]=$this->model->getStudentCount($row['id']);
            $i++;
        }
        if(isset($dataList)){
            $this->view->dataList = $dataList;
        }
        
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
        $hours=$_POST['time_hours'];
        $minutes=$_POST['time_minutes'];

        $this->model->saveQuiz($topic,$hours,$minutes);
        $result=0;
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
            $result=$this->model->saveQuestions($topic,$qno,$question,$ans1,$ans2,$ans3,$ans4,$ans5,$choice);
        }
        if($result == 1){
            header('location: '.URL.'Quiz/renderQuizPage?alert=success');
        }else{
            header('location: '.URL.'Quiz/renderQuizPage?alert=fail');
        }
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