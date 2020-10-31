<?php

class studentRegistration extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    function index(){
        
        $this->view->render('staff/studentRegistration');
    }

    function create(){

        $data = array();
        $data['fname'] = $_POST['fname'];
        $data['mname'] = $_POST['mname'];
        $data['lname'] = $_POST['lname'];
        $data['tel_no'] = $_POST['tel'];
        $data['address'] = $_POST['address'];
        $data['NIC'] = $_POST['nic'];
        $data['gender'] = $_POST['gender'];
        $data['DOB'] = $_POST['dob'];
        $data['email'] = $_POST['email'];
        $data['name'] = $_POST['parent_name'];
        $data['tel'] = $_POST['parent_tel'];
        $data['school'] = $_POST['school'];
        $data['grade'] = $_POST['grade'];
        $data['stream'] = $_POST['stream'];
        $data['subject1'] = $_POST['subject1'];
        $data['subject2'] = $_POST['subject2'];
        $data['subject3'] = $_POST['subject3'];
        
        $data['imagename']=$_FILES['img']['name'];
        $data['temp']=$_FILES['img']['tmp_name'];
       

        $this->model->create($data);
        header('location: '.URL.'studentRegistration');
    }
}