<?php

class Model{

    function __construct(){
       $this->db = new Database(DB_HOST,DB_NAME,DB_USER,DB_PASS);
    }
}