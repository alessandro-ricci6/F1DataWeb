<?php

require_once '../bootstrap.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if($_POST['action'] == 'add'){
        $db->addContract($_POST['driverId'], $_POST['teamId'], $_POST['signYear'], $_POST['expYear']);
    }
    elseif($_POST['action'] == 'edit'){
        $teamId = $_POST['team'];
        $expYear = $_POST['eYear'];
        $signYear = $_POST['sYear'];
        $contractId = $_POST['contract'];
        $db->updateContract($contractId, $expYear, $signYear, $teamId);
    }
    elseif($_POST['action'] == 'delete'){
        $db->deleteContract($_POST['contract']);
    }
    elseif($_POST['action'] == 'get'){
        $id = $_POST['driver'];
        $data = $db->getDriverContract($id);
        echo json_encode($data);
    }
}