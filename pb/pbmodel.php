<?php

class Pbmodel {


    public function __construct(){

    }

    public function getcurrence($c) {
        $filename = 'localdata';
        $uselocal = false;
        if (file_exists($filename) ){
            $origin = new DateTime( date("Y-m-d",filemtime($filename)));
            $target = new DateTime('now');
            $interval = $origin->diff($target);
//            echo date("Y-m-d",filemtime($filename));
//            print_r($origin);
//            print_r($target);
//            print_r($interval);
            if ($interval->d<2) {
                $content=file_get_contents($filename);
                $uselocal = true;
//                echo "local file";
            }
        }

        if ($uselocal == false) {
            $content=file_get_contents("https://api.privatbank.ua/p24api/pubinfo?json&exchange&coursid=5");
            file_put_contents($filename, $content);
        }

        $data=json_decode($content);
        foreach ($data as $key => $value) {
            if ($value->ccy == $c) return $value;
        }
        return false;
    }

}