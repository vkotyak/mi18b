<?php

class Model {
    private $db;
    private $isconnected=0;

    public function __construct(){
        $this->db = new mysqli('localhost', 'rdev', 'zaq1!QAZ', 'example');
        if ($this->db->connect_errno) {
            die ("error");
        } else {
            $this->isconnected = 1;
        }
    }

    public function getlist(){
        $data = array();
        $result = $this->db->query("SELECT * FROM students");
        if ($result != false) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        } else {
            return "Error in query";
        }
    }

    public function addStudent($arr) {
        $q = " INSERT INTO `students` (`id`, `name`, `surname`, `secondname`) VALUES (NULL, '".$arr['name']."', '".$arr['surname']."', '".$arr['secondname']."'); ";
//        echo $q;
        return $this->db->query($q);
    }

    function __destruct() {
        if ($this->isconnected==1) {
            $this->db->close();
        }
    }

}