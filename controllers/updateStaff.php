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
        $this->view->render('admin/staffUpdateForm');
    }

    function update(){

        $data = array();
        $data['fname'] = $_POST['name_update'];
        $data['tel_no'] = $_POST['tel_update'];
        $data['address'] = $_POST['address_update'];
        $data['NIC'] = $_POST['NIC_update'];
        $data['DOB'] = $_POST['DOB_update'];
        $data['email'] = $_POST['email_update'];
        $data['fixed_salary'] = $_POST['salary_update'];


        $result=$this->model->update($data);
        // if($result == 1){
        //     header('location: '.URL.'updateStaff?alert=success');
        // }else{
        //     header('location: '.URL.'updateStaff?alert=fail');
        // }
    }
}