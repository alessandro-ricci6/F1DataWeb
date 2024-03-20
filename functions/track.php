<?php
require_once '../bootstrap.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if($_POST['action'] == 'filter') {
        if($_POST['filter'] == 'No filter'){
            $data = $db->getAllTracks();

            echo json_encode($data);
        } else {
            $data = $db->getTrackByCountry($_POST['filter']);

            echo json_encode($data);
        }
    }
}