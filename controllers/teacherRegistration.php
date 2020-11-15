<?php

class teacherRegistration extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    function index(){
        $this->view->render('admin/teacherRegistration');
        $this->view->subList = $this->model->listSubject();
    }

    function create(){

        $data = array();
        $data['name'] = $_POST['name'];
        $data['NIC'] = $_POST['NIC'];
        $data['DOB'] = $_POST['DOB'];
        $data['gender'] = $_POST['gender'];
        $data['email'] = $_POST['email'];
        $data['address'] = $_POST['address'];
        $data['tel_no'] = $_POST['tel'];
        $data['qualifications'] = $_POST['qualifications'];        
        $data['subject_id'] = $_POST['id'];


        $this->model->create($data);
        header('location: '.URL.'teacherRegistration');
    }
}
