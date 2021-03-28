<?php

class prepareResultSheet extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    function index($id,$batch){
    	$this->view->classList = $this->model->listTeacherClasses($_SESSION["userid"]);
    	$this->view->userDetails = $this->model->listPmDetails($_SESSION["userid"]);
        $this->view->exams = $this->model->listExams($_SESSION["userid"],$id);
        $this->view->classid = $id;
        $this->view->batch = $batch;
    	$this->view->render('paperMarker/prepareResultSheet');
    }

    function export($classid,$batch){
            if(isset($_POST["export"])){   
              header ( "Content-type: application/vnd.ms-excel" );
              header ( "Content-Disposition: attachment; filename=resultsheet.xls" ); 
              $result = $this->model->listStudents($_SESSION["userid"],$batch);
              echo "<table border='1' style='font-size:16px;'><tr><th colspan='3' style='background-color:#CCC;'>".$batch.'-'.$_POST['exam']."</th></tr>"; 
              echo "<tr><th>Reg No</th><th>Name</th><th>Marks</th></tr>";
              while($row = mysqli_fetch_assoc($result)){  
                   echo "<tr><td>".$row['reg_no']."</td><td>".$row['fname']."</td><td></td></tr>";
              }  
              echo "</table>";
            }
    }

    function sendEmail($classid,$batch){
      $message = "Hi there,<br/><br/>This is my message.<br><br>";
       $headers = "From: From-Name<vidarsha.online@gmail.com>";
// boundary
            $semi_rand = md5(time());
            $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";

// headers for attachment
            $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\"";
             $message = "This is a multi-part message in MIME format.\n\n" . "--{$mime_boundary}\n" . "Content-Type: text/html; charset=ISO-8859-1\"\n" . "Content-Transfer-Encoding: 7bit\n\n" . $message . "\n\n";
            $message .= "--{$mime_boundary}\n";
                $filepath = 'C:\wamp64\www\IMS_Vidarsha\public\uploads\results\\'.$_FILES['image']['name'];
                move_uploaded_file($_FILES['image']['tmp_name'], $filepath); //upload the file
              $filename = $_FILES['image']['name'];
                $file = fopen($filepath, "rb");
                $data = fread($file, filesize($filepath));
                fclose($file);
                $data = chunk_split(base64_encode($data));
                $message .= "Content-Type: {\"application/octet-stream\"};\n" . " name=\"$filename\"\n" .
                        "Content-Disposition: attachment;\n" . " filename=\"$filename\"\n" .
                        "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
                        $message .= "--{$mime_boundary}\n";
        $subject = 'New Resultsheet';
       // $header = "From: vidarsha.online@gmail.com\r\nContent-Type: multipart/mixed;charset=UTF-8;MIME-Version: 1.0\r\n";
        if(mail('isurikaperera.hip@gmail.com', $subject, $message, $headers)){
            echo "<h1 style='text-align:center;margin-top:100px;'>Email sent !</h1>";
        } else{ echo 'false';}
    }

    
}