<?php
include("model.php");
include("view.php");

$model = new Model();
$view = new View();

$data=array();
$content="";

if (isset($_POST['task'])){
    switch ($_POST['task']){
        case 'addstudent':
            $student=array();
            $student['name'] = htmlspecialchars($_POST['sname'], ENT_QUOTES, "UTF-8");
            $student['surname'] = htmlspecialchars($_POST['ssurname'], ENT_QUOTES, "UTF-8");
            $student['secondname'] = htmlspecialchars($_POST['ssecname'], ENT_QUOTES, "UTF-8");
            if (!$model->addStudent($student)){
                $content .= "<h3>Error adding student</h3>";
            }
        break;
    }
}

$data = $model->getlist();

$content .= $view->buildData($data);
$content .= $view->showForm();
$view->showPage($content);