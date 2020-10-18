<?php

class paperMarkerRegistration extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    function index(){

    	$this->view->render('teacher/paperMarkerRegistration');
    }

    function create(){

    	$data = array();
        $data['name'] = $_POST['name'];
        $data['tel_no'] = $_POST['tel'];
        $data['address'] = $_POST['address'];
        $data['NIC'] = $_POST['NIC'];
        
        $data['DOB'] = $_POST['DOB'];
        $data['email'] = $_POST['email'];
        $data['qualifications'] = $_POST['qualifications'];


        $this->model->create($data);
        header('location: '.URL.'paperMarkerRegistration');
    }
}