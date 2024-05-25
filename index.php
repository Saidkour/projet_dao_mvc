<?php
require_once 'vendor/autoload.php';

use app\controllers\VoitureControllers;

//routage :
if (isset($_GET["action"])) {
    $action = $_GET['action'];
    switch ($action) {
        case "list":
            VoitureControllers::indexAction();
            break;
        default:
            echo "page not foud 404 ";
            break;
    }
}
