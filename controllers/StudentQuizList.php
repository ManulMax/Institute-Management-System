<?php

class StudentQuizList extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    function index($name,$batch){
    	$this->view->userDetails = $this->model->listDetails($_SESSION["userid"]);
    	$this->view->studentSubject = $this->model->listStudentSubjects($_SESSION["userid"]);
    	$this->view->batch = $batch;
        Session::set('subject',$name);
        Session::set('batch',$batch);
        $qlist = $this->model->listQuizzes($name,$batch);
        $i=0;
        while($row=mysqli_fetch_assoc($qlist)){
            $dataList[$i][0]=$row['id'];
            $dataList[$i][1]=$row['topic'];
            $dataList[$i][2]=$row['date'];
            $dataList[$i][3]=$row['time_hours'];
            $dataList[$i][4]=$row['time_minutes'];
            $dataList[$i][5]=$this->model->getStatus($_SESSION["userid"],$row['id']);
            $dataList[$i][6]=$this->model->getMarks($_SESSION["userid"],$row['id']);
            $i++;
        }
        $this->view->dataList = $dataList;
        $this->view->render('student/StudentQuizList');
    }


    function renderQuizPage($id){
        $this->view->classList = $this->model->listClasses($_SESSION["userid"]);
        $this->view->userDetails = $this->model->listDetails($_SESSION["userid"]);
        $this->view->quiz = $this->model->getQuiz($id);
        $this->view->quizID = $id;
        $this->view->render('student/participateQuizLandingPage');
    }
}