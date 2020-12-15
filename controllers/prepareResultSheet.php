<?php

class prepareResultSheet extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    function index(){
    	$this->view->classList = $this->model->listTeacherClasses($_SESSION["userid"]);
    	$this->view->userDetails = $this->model->listPmDetails($_SESSION["userid"]);
    	$this->view->render('paperMarker/prepareResultSheet');
    }

    function export(){
    	 if(isset($_POST["export"])){   
		      header('Content-Type: text/csv; charset=utf-8');  
		      header('Content-Disposition: attachment; filename=data.csv');  
		      $output = fopen("php://output", "w");  
		      fputcsv($output, array('RegNo', 'Name')); 
		      $result = $this->model->listStudents($_SESSION["userid"]); 
  
		      while($row = mysqli_fetch_assoc($result)){  
		           fputcsv($output, $row);  
		      }  
		      fclose($output);  
		 } 
    }

    
}