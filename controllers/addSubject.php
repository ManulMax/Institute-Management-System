<?php

class addSubject extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    function index(){
        $this->view->subList = $this->model->listSubject();
    	$this->view->render('admin/addSubject');
    }

    function create(){
        $data = $_POST['subject'];
        $result1 = $this->model->checkSubject($data);
        $row = mysqli_fetch_assoc($result1);
        $count = $row['sum'];
        echo $count;
        if($count == 0){            
            $this->model->create($data);
            header('location: '.URL.'addSubject');
        }
        
        else{
            header('location: '.URL.'addSubject');
        }      
        
    }

    function delete($subid){
        $result=$this->model->delete($subid);
        if($result == 1){
            header('location: '.URL.'addSubject?alert2=success');
        }else{
            header('location: '.URL.'addSubject?alert2=fail');
        }
    }
}