<?php
require_once '../bootstrap.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if($_POST['action'] == 'filter'){
        if($_POST['filter'] == ""){
            $data = $db->getAllDriver();
            echo json_encode($data);
        }
        else{
            $data = $db->getDriverByNationality($_POST['filter']);
            echo json_encode($data);
        }
    }
}