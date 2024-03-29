<?php

class SetPath{

    private $_url = null;
    private $_controller = null;

    function __construct(){

        $this->_getUrl();

        Session::init();

        if(empty($this->_url[0])){
            $this->_loadDefaultController();
            return false;
        }
       // print_r($url);


        $this->_loadExistingController();


        $this->_callControllerMethod();

        
    }


    private function _getUrl(){
        $url = isset($_GET['url'])?$_GET['url']:null;
        $url = rtrim($url,'/');
        $url = filter_var($url, FILTER_SANITIZE_URL);
        $this->_url = explode('/', $url);
    }

    private function _loadDefaultController(){
            require 'controllers/index.php';
            $this->_controller = new Index();
            $this->_controller->loadModel('index');
            $this->_controller->index();
         //   header('location: ./index');
    }

     private function _loadExistingController(){
            $file = 'controllers/'.$this->_url[0].'.php';
        if(file_exists($file)){
            require $file;
            $this->_controller = new $this->_url[0];
            $this->_controller->loadModel($this->_url[0]);
        } else{
            $this->_error('Opzz! Requested page does not exist.');
            return false;
        }

        
    }

    private function _callControllerMethod(){

        

        $length = count($this->_url);

        if($length>1){
            if(!method_exists($this->_controller, $this->_url[1])){
                $this->_error('Opzz! Requested method does not exist.');
            }
        }

        switch ($length){
            case 11:
            $this->_controller->{$this->_url[1]}($this->_url[2],$this->_url[3],$this->_url[4],$this->_url[5],$this->_url[6],$this->_url[7],$this->_url[8],$this->_url[9],$this->_url[10]);
                break;
            case 10:
            $this->_controller->{$this->_url[1]}($this->_url[2],$this->_url[3],$this->_url[4],$this->_url[5],$this->_url[6],$this->_url[7],$this->_url[8],$this->_url[9]);
                break;
            case 9:
            $this->_controller->{$this->_url[1]}($this->_url[2],$this->_url[3],$this->_url[4],$this->_url[5],$this->_url[6],$this->_url[7],$this->_url[8]);
                break;
            case 8:
            $this->_controller->{$this->_url[1]}($this->_url[2],$this->_url[3],$this->_url[4],$this->_url[5],$this->_url[6],$this->_url[7]);
                break;
            case 7:
            $this->_controller->{$this->_url[1]}($this->_url[2],$this->_url[3],$this->_url[4],$this->_url[5],$this->_url[6]);
                break;
            case 6:
            $this->_controller->{$this->_url[1]}($this->_url[2],$this->_url[3],$this->_url[4],$this->_url[5]);
                break;
            case 5:
            $this->_controller->{$this->_url[1]}($this->_url[2],$this->_url[3],$this->_url[4]);
                break;
            case 4:
            $this->_controller->{$this->_url[1]}($this->_url[2],$this->_url[3]);
                break;
            case 3:
            $this->_controller->{$this->_url[1]}($this->_url[2]);
                break;
            case 2:
            $this->_controller->{$this->_url[1]}();
                break;
            default:
            $this->_controller->index();;
                break;
        }
           
    }


    private function _error($msg){
        require 'controllers/error.php';
                $this->_controller = new ErrorE();
                $this->_controller->index($msg);
                exit;
    }

    public function alert($msg){
    echo "<script type='text/javascript'>alert('$msg');</script>";
    }
}