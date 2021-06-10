<?php
include_once "controllers/Controller.php";
$route = isset($_GET["route"])?$_GET["route"]:"";
$controller = new Controller();

switch ($route){
    case "aboutus": $controller->aboutus(); break;
    case "list": $controller->listsp(); break;
    case "add": $controller->add(); break;
    case "save": $controller->save(); break;
    case "edit": $controller->edit(); break;
    case "update": $controller->update(); break;
    case "delete": $controller->delete(); break;
    default: $controller->listsp();
}