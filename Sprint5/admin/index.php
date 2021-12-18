<?php
session_start();
// session_destroy(;)
    require_once '../inc/database.php'; //База данных

    include_once("modelAdmin/modelAdmin.php");
    include_once("modelAdmin/modelAdminNews.php");

    include_once("controllerAdmin/controllerAdmin.php");
    include_once("controllerAdmin/controllerAdminNews.php");

    include_once('routeAdmin/routingAdmin.php'); //!!!

    echo $response;