<?php

class updateTeacher extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    function index(){
    	$this->view->tecList = $this->model->listTeacher();
    	$this->view->render('admin/updateTeacher');
    }

    function renderTeacherUpdate($userTec){
        $this->view->userTec = $userTec;
        $this->view->tecDetails = $this->model->listTecDetails($userTec);
        $this->view->render('admin/teacherUpdateForm');
    }

    function update($userTec){

        $data = array();
        $data['fname'] = $_POST['fname_update'];
        $data['tel_no'] = $_POST['tel_update'];
        $data['address'] = $_POST['address_update'];
        $data['NIC'] = $_POST['NIC_update'];
        $data['DOB'] = $_POST['DOB_update'];
        $data['email'] = $_POST['email_update'];
        $data['qualification'] = $_POST['qualification_update'];
        $data['subject_id'] = $_POST['subject_update'];
        $data['acc_no'] = $_POST['acc_update'];
        $data['bank_name'] = $_POST['bank_update'];
        $data['branch_name'] =$_POST['branch_update'];

        $result=$this->model->update($data,$userTec);
        if($result == 1){
            //header('location: '.URL.'updateTeacher?alert=success');
        }else{
            //header('location: '.URL.'updateTeacher?alert=fail');
        }
        
    }
}