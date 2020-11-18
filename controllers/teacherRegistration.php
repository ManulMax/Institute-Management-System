<?php

class teacherRegistration extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    function index(){
        $this->view->subList = $this->model->listSubject();
        $this->view->render('admin/teacherRegistration');
        
    }

    function create(){
        
        // echo $_POST['fname']." ";
        // echo $_POST['mname']." ";
        // echo $_POST['lname']." ";
        // echo $_POST['NIC']." ";
        // echo $_POST['DOB']." ";
        // echo $_POST['gender']." ";
        // echo $_POST['email']." ";
        // echo $_POST['address']." ";
        // echo $_POST['tel']." ";
        // echo $_POST['qualifications']." ";        
        // echo $_POST['id']." ";         
        // echo $_POST['accNo']." ";
        // echo $_POST['bank']." ";
        // echo $_POST['today']." ";
        // echo $_POST['branch']." ";


        $data = array();
        $data['fname'] = $_POST['fname'];
        $data['mname'] = $_POST['mname'];
        $data['lname'] = $_POST['lname'];
        $data['NIC'] = $_POST['NIC'];
        $data['DOB'] = $_POST['DOB'];
        $data['gender'] = $_POST['gender'];
        $data['email'] = $_POST['email'];
        $data['address'] = $_POST['address'];
        $data['tel_no'] = $_POST['tel'];
        $data['qualifications'] = $_POST['qualifications'];        
        $data['subject_id'] = $_POST['id'];         
        $data['acc_no'] = $_POST['accNo'];
        $data['bank_name'] = $_POST['bank'];
        $data['reg_date'] = $_POST['today'];
        $data['acc_type'] = $_POST['branch'];



        $this->model->create($data);
        header('location: '.URL.'teacherRegistration');
    }
}
