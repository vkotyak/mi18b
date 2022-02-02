<?php
include("model.php");
include("view.php");

$model = new Model();
$view = new View();

$data="";
$content="";

$model->setMessage("Hello world!");
$data = $model->getMessage();

$content = $view->buildMessage($data);
$view->showPage($content);