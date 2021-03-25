<?php

class staffRegistration extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    function index(){
    	$this->view->render('admin/staffRegistration');
    }
    function create(){
        
        $data = array();
        $data['fname'] = $_POST['fname'];
        $data['NIC'] = $_POST['NIC'];
        $data['DOB'] = $_POST['DOB'];
        $data['gender'] = $_POST['gender'];
        $data['email'] = $_POST['email'];
        $data['address'] = $_POST['address'];
        $data['tel_no'] = $_POST['tel'];
        $data['fixed_salary'] = $_POST['salary'];        

        $this->model->create($data);
        header('location: '.URL.'staffRegistration');
    }

}
