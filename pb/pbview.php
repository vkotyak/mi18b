<?php

class Pbview {

    public function __construct(){

    }

    public function buildTable($d){
        $table ='<table>';
        foreach ($d as $key => $value) {
            $table .= '<tr><td>'.$value->ccy.'/'.$value->base_ccy.'</td>';
            $table .= '<td>'.$value->buy.'</td><td>'.$value->sale.'</td>';
            $table .='</tr>';
        }
        $table .= '</table>';
        return $table;
    }
    public function showPage($content) {
        $html ='<html><head><title>oop example</title></head><body>';
        $html .= $content;
        $html .='</body></html>';
        echo $html;
    }
}