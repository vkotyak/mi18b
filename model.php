<?php

class Model {
    private $message;
    public function __construct(){
        $this->message="";
        //echo('construct');
    }
    public function getMessage(){
        return "Message is: ".$this->message;
    }
    public function setMessage($m) {
        //echo ('set message');
        // check value variable m
        $this->message=$m;
    }

}