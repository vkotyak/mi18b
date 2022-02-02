<?php

class Pbmodel {


    public function __construct(){

    }

    public function getcurrence() {
        $content=file_get_contents("https://api.privatbank.ua/p24api/pubinfo?json&exchange&coursid=5");
        $data=json_decode($content);
        return $data;
    }

}