<?php

class updateStudent extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    function index(){
        $this->view->stuList = $this->model->listStudent();
    	$this->view->render('admin/updateStudent');
    }

    function delete($userid){
        $result=$this->model->delete($userid);
        if($result == 1){
            header('location: '.URL.'updateStudent?alert2=success');
        }else{
            header('location: '.URL.'updateStudent?alert2=fail');
        }
    }
}