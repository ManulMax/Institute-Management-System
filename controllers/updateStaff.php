<?php

class updateStaff extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    function index(){
        $this->view->staffList = $this->model->listStaff();

    	$this->view->render('admin/updateStaff');
    }

    function renderStaffUpdate($userSf){
        $this->view->staffDetails = $this->model->listStaffDetails($userSf);
        $this->view->userSf =$userSf;
        $this->view->render('admin/staffUpdateForm');
    }

    function update($userSf){
        
        $data = array();
        $data['fname'] = $_POST['name_update'];
        $data['tel_no'] = $_POST['tel_update'];
        $data['address'] = $_POST['address_update'];
        $data['NIC'] = $_POST['NIC_update'];
        $data['DOB'] = $_POST['DOB_update'];
        $data['email'] = $_POST['email_update'];
        $data['fixed_salary'] = $_POST['salary_update'];


        $result=$this->model->update($data,$userSf);
        if($result == 1){
            header('location: '.URL.'updateStaff?alert1=success');
        }else{
            header('location: '.URL.'updateStaff?alert1=fail');
        }
    }

    function delete($userid){
        $result=$this->model->delete($userid);
        if($result == 1){
            header('location: '.URL.'updateStaff?alert2=success');
        }else{
            header('location: '.URL.'updateStaff?alert2=fail');
        }
    }
}