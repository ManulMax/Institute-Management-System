<?php

class adminIncome extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    function index(){
    	$list=$this->model->listTeacherClasses();
    	$i=0;
        while($row=mysqli_fetch_assoc($list)){
            $dataList[$i][0]=$row['reg_no'];
            $dataList[$i][1]=$row['fname'];
            $dataList[$i][2]=$row['name'];
            $dataList[$i][3]=$row['batch'];
            $dataList[$i][4]=$this->model->getStudentCount($row['reg_no'],$row['batch']);
            $dataList[$i][5]=$this->model->getIncome($row['reg_no'],$row['batch']);
            $i++;
        }
        $this->view->dataList = $dataList;
    	$this->view->render('admin/adminIncome');
    }

}

