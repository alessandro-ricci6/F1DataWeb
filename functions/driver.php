<?php
require_once '../bootstrap.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if($_POST['action'] == 'filter'){
        if($_POST['filter'] == "No filter"){
            $data = $db->getAllDriver();
            echo json_encode($data);
        }
        else{
            $data = $db->getDriverByNationality($_POST['filter']);
            echo json_encode($data);
        }
    }
    elseif($_POST['action'] == 'totPoints'){
        if($_POST['points'] == ''){
            $data = $db->getDriverWithTotPoint(0);
            echo json_encode($data);
        } else {
            $data = $db->getDriverWithTotPoint($_POST['points']);
            echo json_encode($data);
        }
    }
}