<?php

class materials extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    function index($classID,$batch){
        $this->view->classList = $this->model->listClasses($_SESSION["userid"]);
        $this->view->userDetails = $this->model->listDetails($_SESSION["userid"]);
        $this->view->materialList = $this->model->listClassMaterials($classID);
        $this->view->batch = $batch;
        $this->view->classid = $classID;
       // Session::set('userid',$user['id']);
        $this->view->render('teacher/materials');
    }

    function renderDownloadMaterials(){
        $this->view->classList = $this->model->listClasses($_SESSION["userid"]);
        $this->view->materialList = $this->model->listMaterials();
        $this->view->userDetails = $this->model->liststuDetails($_SESSION["userid"]);
        $this->view->render('student/downloadMaterials');
    }

    function renderPmMaterials($id,$batch){
        $this->view->classList = $this->model->listTeacherClasses($_SESSION["userid"]);
        $this->view->userDetails = $this->model->listPmDetails($_SESSION["userid"]);
        $this->view->materialList = $this->model->listClassMaterials($id);
        $this->view->batch = $batch;
        $this->view->render('paperMarker/materials');
    }

    function create($classID,$batch){

        $data = array();

        $data['heading']=$_POST['heading'];
        $data['name']=$_POST['name'];
        $data['description']=$_POST['description'];
        $data['filename']=$_FILES['file']['name'];
        $data['temp']=$_FILES['file']['tmp_name'];


        $result=$this->model->create($data,$classID,$_SESSION["userid"]);
        if($result == 1){
            header('location: '.URL.'materials/index/'.$classID.'/'.$batch.'?alert1=success');
        }else{
            header('location: '.URL.'materials/index/'.$classID.'/'.$batch.'?alert1=fail');
        }
    }

    function delete($classID,$batch,$id){

        $result=$this->model->delete($id);
        if($result == 1){
            header('location: '.URL.'materials/index/'.$classID.'/'.$batch.'?alert2=success');
        }else{
            header('location: '.URL.'materials/index/'.$classID.'/'.$batch.'?alert2=fail');
        }
    }
}