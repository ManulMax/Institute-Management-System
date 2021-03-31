<?php

class updateStudent extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    function index(){
        $this->view->stuList = $this->model->listStudent();
    	$this->view->render('admin/updateStudent');
    }

    function renderStudentUpdate($userStu){
        $this->view->stuDetails = $this->model->listStudentDetails($userStu);
        $this->view->userStu =$userStu;
        $this->view->render('admin/studentUpdateForm');
    }

    function update($userStu){
        
        $data = array();
        $data['fname'] = $_POST['name_update'];
        $data['tel_no'] = $_POST['tel_update'];
        $data['address'] = $_POST['address_update'];
        $data['NIC'] = $_POST['NIC_update'];
        $data['DOB'] = $_POST['DOB_update'];
        $data['email'] = $_POST['email_update'];
        $data['school'] = $_POST['school_update'];
        $data['grade'] = $_POST['grade_update'];
        $data['stream'] = $_POST['stream_update'];


        $result=$this->model->update($data,$userStu);
        if($result == 1){
            header('location: '.URL.'updateStudent?alert=success');
        }else{
            header('location: '.URL.'updateStudent?alert=fail');
        }
    }

    function delete($userid){
        $result=$this->model->delete($userid);
        if($result == 1){
            header('location: '.URL.'updateStudent?alert2=success');
        }else{
            header('location: '.URL.'updateStudent?alert2=fail');
        }
    }
}