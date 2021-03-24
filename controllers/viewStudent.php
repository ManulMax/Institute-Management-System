<?php

class viewStudent extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    function index(){
    	

    	$this->view->userDetails = $this->model->listDetails($_SESSION["userid"]);
    	$this->view->subjectList = $this->model->listSubjects();
    	$this->view->stuList = $this->model->listStudent();
    	$this->view->render('staff/viewStudent');
    }

    function create(){

        $data = array();
        $data['fname'] = $_POST['fname'];
        /*$data['mname'] = $_POST['mname'];
        $data['lname'] = $_POST['lname'];*/
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


        $this->model->create($data);
        header('location: '.URL.'viewStudent');
    }

    function renderStuUpdate($userStu){
        $this->view->stuDetails = $this->model->listStuDetails($userStu);
        $this->view->render('staff/updateStu');
    }

    function update(){

        $data = array();
       /* $data['fname'] = $_POST['fname-update'];*/
        /*$data['mname'] = $_POST['mname'];
        $data['lname'] = $_POST['lname'];*/
        $data['tel_no'] = $_POST['tel-update'];
        $data['address'] = $_POST['address-update'];
        $data['NIC'] = $_POST['NIC-update'];
        /*$data['gender'] = $_POST['gender-update'];*/
        /*$data['DOB'] = $_POST['DOB-update'];*/
        /*$data['email'] = $_POST['email-update'];*/
       /* $data['name'] = $_POST['parent_name-update'];*/
        $data['tel'] = $_POST['parent_tel-update'];
        $data['school'] = $_POST['school-update'];
        $data['grade'] = $_POST['grade-update'];
        $data['stream'] = $_POST['stream-update'];
        $data['subject1'] = $_POST['subject1-update'];
        $data['subject2'] = $_POST['subject2-update'];
        $data['subject3'] = $_POST['subject3-update'];


       $this->model->update($data);
        
            header('location: '.URL.'viewStudent');
        
    }


     function delete($userid){
        $result=$this->model->delete($userid);
        if($result == 1){
            header('location: '.URL.'viewStudent?alert2=success');
        }else{
            header('location: '.URL.'viewStudent?alert2=fail');
        }
    
    }
    
}
