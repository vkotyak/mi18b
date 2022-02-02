<?php
include("pbmodel.php");
include("pbview.php");

$model = new Pbmodel();
$view = new Pbview();

$cur="";
if (isset($_POST['cur'])) {
    $cur = htmlspecialchars(strip_tags($_POST["cur"]), ENT_QUOTES, "UTF-8");
}

$data=[];
$content = $view->buildForm($cur);

if ($cur!="") {
    $data = $model->getcurrence($cur);
    if ($data!==false) {
    $content .= $view->buildTable($data);
    } else {
        $content .="<p>Unknown corrency</p>";
    }
}

$view->showPage($content);