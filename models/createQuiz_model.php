<?php

class createQuiz_Model extends Model{

    public function __construct(){
     	parent::__construct();
    }

    public function listDetails($userid){

        return $this->db->listWhere("*","teacher","user_id=$userid");
    

    }

    public function listClasses($userid){

        return $this->db->listWhere("t.reg_no,c.id,c.batch","class c,user u,teacher t","u.id=t.user_id and t.reg_no=c.teacher_reg_no and u.id=$userid");
    

    }

    public function listHalls(){

    	return $this->db->listAll("hall");
        

    }

    public function listSubjects(){

        return $this->db->listAll("subject");
        

    }


    public function getUser($id){

        return $this->db->listWhere('user',array('nic','first_name','last_name','gender','email','contact_no','user_status','user_type'),"nic='$id'");
    }

    public function saveQuiz($topic,$timeLimit){

        $this->db->insert("quiz","(topic,time_limit,class_id)","('".$topic."','".$timeLimit."',".$_SESSION['classid'].")");
        
    }

    public function saveQuestions($topic,$qno,$question,$ans1,$ans2,$ans3,$ans4,$ans5,$choice){
        $quizID = $this->db->listWhere("id","quiz","topic='".$topic."'");
        $num = mysqli_fetch_assoc($quizID);
        $this->db->insert("question","(q_no,quiz_id,ques,answer1,answer2,answer3,answer4,answer5,correct_ans)","($qno,".$num['id'].",'".$question."','".$ans1."','".$ans2."','".$ans3."','".$ans4."','".$ans5."',".$choice.")");
    }

    public function update($data){

        $this->db->update('user',array(
            'nic' => $data['nic'],
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'gender' => $data['gender'],
            'email' => $data['email'],
            'username' => $data['email'],
            'contact_no' => $data['contact_no'],
            'user_status' => $data['user_status'],
            'user_type' => $data['user_type']),"nic = '{$data['nic']}'");

    }

    public function delete($id){
        $data = $this->db->listWhere('user',array('user_type'),"nic='$id'");

        if($data['user_type']=='owner'){
            return false;
        } else{
            $this->db->delete('user',"nic='$id'");
        }

    }




}