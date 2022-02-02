<?php

class Pbview {

    public function __construct(){

    }
    public function buildForm($c){
        $form ='<form action="" method="post">
            <select name="cur">';
        if ($c == 'USD') {$isselected="selected";} else {$isselected='';}
        $form .='<option value="USD" '.$isselected.'>USD</optiob>';
        if ($c == 'EUR') {$isselected="selected";} else {$isselected='';}
        $form .='<option value="EUR" '.$isselected.'>EUR</optiob>';
        if ($c == 'BTC') {$isselected="selected";} else {$isselected='';}
        $form .='<option value="BTC" '.$isselected.'>BTC</optiob>';
        if ($c == 'GBP') {$isselected="selected";} else {$isselected='';}
        $form .='<option value="GBP" '.$isselected.'>GBP</optiob>';
        
        $form .='</select>
            <input type="submit" value="Get">
            </form>';
        return $form;
    }

    public function buildTable($value){
        $table ='<table>';
            $table .= '<tr><td>'.$value->ccy.'/'.$value->base_ccy.'</td>';
            $table .= '<td>'.$value->buy.'</td><td>'.$value->sale.'</td>';
            $table .='</tr>';
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