<?php
include("pbmodel.php");
include("pbview.php");

$model = new Pbmodel();
$view = new Pbview();

$data=[];
$content="";

$data = $model->getcurrence();

$content = $view->buildTable($data);
$view->showPage($content);