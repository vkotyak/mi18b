<?php

class View {

    public function __construct(){

    }

    public function buildMessage($d){
        //echo ('buildMessage');
        return '<h2>Message</h2><p>'.$d.'</p>';
    }
    public function showPage($content) {
        //echo ('showPage');
        $html ='<html><head><title>oop example</title></head><body>';
        $html .= $content;
        $html .='</body></html>';
        echo $html;
    }
}