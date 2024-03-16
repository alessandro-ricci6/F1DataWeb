<?php
require_once '../bootstrap.php';
ini_set('display_errors',1);
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if($_POST['action'] == 'filter'){
        if($_POST['filter'] == "No filter"){
            $data = $db->getAllRaces();
            echo json_encode($data);
        }
        else{
            $data = $db->getRacesBySeasonId($_POST['filter']);
            echo json_encode($data);
        }
    }
}