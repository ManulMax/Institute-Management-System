<?php

class paperMarkerDashboard extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    function index(){
        $this->view->classList = $this->model->listClasses($_SESSION["userid"]);
        $this->view->userDetails = $this->model->listDetails($_SESSION["userid"]);
        // $batch=(date("Y")+1)." A/L";
        $this->view->stuCount1 = $this->model->listStudentCount($_SESSION["userid"],"2020 A/L");
        $this->view->stuCount2 = $this->model->listStudentCount($_SESSION["userid"],"2021 A/L");
        $this->view->stuCount3 = $this->model->listStudentCount($_SESSION["userid"],"2022 A/L");
        $this->view->stuCount4 = $this->model->listStudentCount($_SESSION["userid"],"Revision");

        $this->view->schedules = $this->model->listSchedules($_SESSION["userid"]);
        $this->view->render('paperMarker/paperMarkerDashboard');
    }

    function getMaterials($id){
        $this->view->materialList = $this->model->listMaterials($id);
        $this->view->render('paperMarker/paperMarkerDashboard');
    }
}