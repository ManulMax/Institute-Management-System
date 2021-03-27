<?php

class prepareResultSheet extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    function index(){
    	$this->view->classList = $this->model->listTeacherClasses($_SESSION["userid"]);
    	$this->view->userDetails = $this->model->listPmDetails($_SESSION["userid"]);
        $this->view->exams = $this->model->listExams($_SESSION["userid"]);
    	$this->view->render('paperMarker/prepareResultSheet');
    }

    function export(){
            if(isset($_POST["export"])){   
              header ( "Content-type: application/vnd.ms-excel" );
              header ( "Content-Disposition: attachment; filename=resultsheet.xls" ); 
              $result = $this->model->listStudents($_SESSION["userid"],$_POST['batch']);
              echo "<table border='1' style='font-size:16px;'><tr><th colspan='3' style='background-color:#CCC;'>".$_POST['batch'].'-'.$_POST['exam']."</th></tr>"; 
              echo "<tr><th>Reg No</th><th>Name</th><th>Marks</th></tr>";
              while($row = mysqli_fetch_assoc($result)){  
                   echo "<tr><td>".$row['reg_no']."</td><td>".$row['fname']."</td><td></td></tr>";
              }  
              echo "</table>";
            }
    }

    
}