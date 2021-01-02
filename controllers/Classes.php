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

    function sendEmail(){
        $batch = $_POST['batch'];
        if($batch == 1){
            $batchname = date("Y")." A/L";
        }else if($batch == 2){
            $batchname = date("Y")+1+" A/L";
        }else if($batch == 3){
            $batchname = date("Y")+2+" A/L";
        }else if($batch == 4){
            $batchname = "Revision";
        }
        $count = $_POST['stu-count'];
        $day = $_POST['day'];
        $hall = $_POST['hall'];
        $startTime = $_POST['start-time'];
        $endTime = $_POST['end-time'];
        $startDate = $_POST['start-date'];

        $scheduleURL='<a href="'.URL.'Classes/saveSchedule/'.$batch.'/'.$batchname.'/'.$count.'/'.$day.'/'.$hall.'/'.$startTime.'/'.$endTime.'/'.$startDate.'" style="background-color: #080;font-size: 18px;border: 1px solid #080;padding: 15px;color: #ffffff">Confirm</a>';
        $emailBody = '<html>
                        <body>
                            <div style="color: #000;font-size: 16px">
                                <h4>Hi Isurika Perera! has sent you a new class shedule! </h4>
                                 <p>Batch - '.$batchname.' </p>
                                 <p> Expected student count - '.$count.' </p>
                                 <p> day - '.$day.' </p><p> hall - h'.$hall.' </p>
                                 <p> Duration - '.$startTime.' - '.$endTime.' </p>
                                 <p> Start date - '.$startDate.'</p>'.$scheduleURL.'</div></body></html>';
        $subject = 'New Class Schedule Request';
        $header = "From: vidarsha.online@gmail.com\r\nContent-Type: text/html;charset=UTF-8;MIME-Version: 1.0\r\n";
        if(mail('isurikaperera.hip@gmail.com', $subject, $emailBody, $header)){
            echo "<h1 style='text-align:center;margin-top:100px;'>Email sent !</h1>";
        } else{ echo 'false';}
    }

    function saveSchedule($batch,$batchname,$count,$day,$hall,$startTime,$endTime,$startDate){
        $data = array();
        $data['batch'] = $batch;
        $data['batchname'] = $batchname;
        $data['count'] = $count;
        $data['day'] = $day;
        $data['hall'] = $hall;
        $data['startTime'] = $startTime;
        $data['endTime'] = $endTime;
        $data['startDate'] = $startDate;
        $this->model->saveSchedule($data);
        
    }


}