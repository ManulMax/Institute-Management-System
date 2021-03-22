<?php

class paperMarkerRegistration extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    function index(){
        $this->view->classList = $this->model->listClasses($_SESSION["userid"]);
        $this->view->userDetails = $this->model->listDetails($_SESSION["userid"]);
        $this->view->pmList = $this->model->listPaperMarkers($_SESSION["userid"]);
        
        $this->view->render('teacher/paperMarkerRegistration');
    }

    function create(){

        $data = array();
        $data['name'] = $_POST['name'];
        $data['tel_no'] = $_POST['tel'];
        $data['address'] = $_POST['address'];
        $data['NIC'] = $_POST['NIC']; 
        $data['gender'] = $_POST['gender'];
        $data['DOB'] = $_POST['DOB'];
        $data['email'] = $_POST['email'];
        $data['qualifications'] = $_POST['qualifications'];

        $result=$this->model->create($data);
        if($result == 1){
            header('location: '.URL.'paperMarkerRegistration?alert=success');
        }else{
            header('location: '.URL.'paperMarkerRegistration?alert=fail');
        }
        
    }

    function renderPmUpdate($userPm){
        $this->view->pmDetails = $this->model->listPmDetails($userPm);
        $this->view->render('teacher/updatePaperMarker');
    }

    function update(){

        $data = array();
        $data['name'] = $_POST['name-update'];
        $data['tel_no'] = $_POST['tel-update'];
        $data['address'] = $_POST['address-update'];
        $data['NIC'] = $_POST['NIC-update'];
       // $data['gender'] = $_POST['gender-update'];
        $data['DOB'] = $_POST['DOB-update'];
        $data['email'] = $_POST['email-update'];
        $data['qualifications'] = $_POST['qualifications-update'];


        $result=$this->model->update($data);
        if($result == 1){
            header('location: '.URL.'paperMarkerRegistration?alert=success');
        }else{
            header('location: '.URL.'paperMarkerRegistration?alert=fail');
        }
    }

    function delete($userid){
        $result=$this->model->delete($userid);
        if($result == 1){
            header('location: '.URL.'paperMarkerRegistration?alert2=success');
        }else{
            header('location: '.URL.'paperMarkerRegistration?alert2=fail');
        }
    }

    
}