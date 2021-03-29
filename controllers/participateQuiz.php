<?php

class participateQuiz extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    function index($id){
    	$this->view->userDetails = $this->model->listDetails($_SESSION["userid"]);
    	$this->view->questions = $this->model->listQuestions($id);

        $durationlist=$this->model->getDuration($id);
        $row=mysqli_fetch_assoc($durationlist);
        $this->view->quizHours = $row['time_hours'];
        $this->view->quizMinutes = $row['time_minutes'];

        $this->view->quizzID = $id;
    	$this->view->studentSubject = $this->model->listStudentSubjects($_SESSION["userid"]);
        $this->view->render('student/participateQuiz');
    }

    function saveMarks($id){
        $str = $_POST['res'];
        $pieces = explode(" ", $str);
        $this->model->saveMarks($_SESSION["userid"],$pieces[0],$id);


        $this->view->userDetails = $this->model->listDetails($_SESSION["userid"]);
        $this->view->studentSubject = $this->model->listStudentSubjects($_SESSION["userid"]);
        $this->view->batch = $_SESSION['batch'];
        $qlist = $this->model->listQuizzes($_SESSION['subject'],$_SESSION['batch']);
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

     

}
