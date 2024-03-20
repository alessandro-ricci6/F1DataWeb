<?php

require_once '../bootstrap.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if($_POST['action'] == 'add'){
        $db->addContract($_POST['driverId'], $_POST['teamId'], $_POST['signYear'], $_POST['expYear']);
    }
}