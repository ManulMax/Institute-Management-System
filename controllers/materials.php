<?php

class materials extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    function index($classID,$batch){
        $this->view->classList = $this->model->listClasses($_SESSION["userid"]);
        $this->view->userDetails = $this->model->listDetails($_SESSION["userid"]);
        $this->view->materialList = $this->model->listMaterials($classID);
        $this->view->batch = $batch;
        $this->view->render('teacher/materials');
    }

    function renderDownloadMaterials($id){
        $this->view->classList = $this->model->listClasses($_SESSION["userid"]);
        $this->view->materialList = $this->model->listMaterials($id);
        $this->view->render('student/downloadMaterials');
    }

    function create(){

        $data = array();

        $data['heading']=$_POST['heading'];
        $data['name']=$_POST['name'];
        $data['description']=$_POST['description'];
        $data['filename']=$_FILES['file']['name'];
        $data['temp']=$_FILES['file']['tmp_name'];


        $this->model->create($data);
        header('location: '.URL.'materials');
    }
}