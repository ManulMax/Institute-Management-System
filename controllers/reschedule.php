<?php

class reschedule extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    function index($id,$batch){
    	$this->view->classList = $this->model->listClasses($_SESSION["userid"]);
        $this->view->userDetails = $this->model->listDetails($_SESSION["userid"]);
    	$this->view->hallList = $this->model->listHalls();
        $this->view->scheduleList = $this->model->listSchedules();
        $this->view->schedule = $this->model->currentSchedule($id,$_SESSION["userid"]);
        $this->view->classid = $id;
        $this->view->batch = $batch;
        Session::set('batchId',$id);
        Session::set('batch',$batch);
    	$this->view->render('teacher/reschedule');
    }

    function search($batch){

    }
    

    function sendRescheduleEmail(){
        $batchname = $_SESSION['batch'];
        $day = $_POST['day'];
        $hall = $_POST['hall'];
        $startTime = $_POST['start-time'];
        $endTime = $_POST['end-time'];

        $scheduleURL='<a href="'.URL.'reschedule/saveReschedule/'.$batchname.'/'.$day.'/'.$hall.'/'.$startTime.'/'.$endTime.'" style="background-color: #080;font-size: 18px;border: 1px solid #080;padding: 15px;color: #ffffff">Confirm</a>';
        $emailBody = '<html>
                        <body>
                            <div style="color: #000;font-size: 16px">
                                <h4>Hi Isurika Perera! has sent you a new class shedule! </h4>
                                 <p>Batch - '.$batchname.' </p>
                                 <p> day - '.$day.' </p><p> hall - h'.$hall.' </p>
                                 <p> Duration - '.$startTime.' - '.$endTime.' </p>'.$scheduleURL.'</div></body></html>';
        $subject = 'New Class Schedule Request';
        $header = "From: vidarsha.online@gmail.com\r\nContent-Type: text/html;charset=UTF-8;MIME-Version: 1.0\r\n";
        if(mail('isurikaperera.hip@gmail.com', $subject, $emailBody, $header)){
            echo "<h1 style='text-align:center;margin-top:100px;'>Email sent !</h1>";
        } else{ echo 'false';}
    }

    function saveReschedule($batchname,$day,$hall,$startTime,$endTime){
        $data = array();
        $data['batchname'] = $batchname;
        $data['day'] = $day;
        $data['hall'] = $hall;
        $data['startTime'] = $startTime;
        $data['endTime'] = $endTime;
        $this->model->saveReschedule($data,$_SESSION["userid"]);
        header('location: '.URL.'reschedule/index/'.$_SESSION['batchId']."/".$_SESSION['batch']);
    }
}