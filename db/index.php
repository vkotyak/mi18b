<?php
include("model.php");
include("view.php");

$model = new Model();
$view = new View();

$data=array();
$content="";

$data = $model->getlist();

$content = $view->buildData($data);
$view->showPage($content);