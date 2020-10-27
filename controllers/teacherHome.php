<?php

class teacherHome extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    function index(){
    	$this->view->classList = $this->model->listClasses($_SESSION["userid"]);
    	$this->view->render('teacher/teacherHome');
    }

    function getMaterials($id){
    	$this->view->materialList = $this->model->listMaterials($id);
    	$this->view->render('teacher/materials');
    }
}