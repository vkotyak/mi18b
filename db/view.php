<?php

class View {

    public function __construct(){

    }

    public function buildData($d){
/*
Array
(
    [0] => Array
        (
            [id] => 1
            [name] => Ivan
            [surname] => Ivanov
            [secondname] => Ivanovich
        )

    [1] => Array
        (
            [id] => 2
            [name] => Petro
            [surname] => Petrov
            [secondname] => Petvovich
        )

)
*/
        $html = '<table>';
        foreach($d as $row) {
            $html .= '<tr><td>'.$row['name'].'</td><td>'.$row['surname'].'</td></tr>';            
        }
        $html .= '</table>';
        return $html;
    }

    public function showForm() {
        $html ='
            <form action="" method="post">
            <input type="text" id="sname" name="sname">
            <input type="text" id="ssurname" name="ssurname">
            <input type="text" id="ssecname" name="ssecname">
            <input type="hidden" name="task" value="addstudent">
            <input type="submit" value="send">
            </form>';
        return $html;
    }

    public function showPage($content) {
        $html ='<html><head><title>oop example</title></head><body>';
        $html .= $content;
        $html .='</body></html>';
        echo $html;
    }
}