<?php
require_once '../bootstrap.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if($_POST['action'] == 'filter'){
        if($_POST['filter'] == "No filter"){
            $data = $db->getAllTeam();
            echo json_encode($data);
        }
        else{
            $data = $db->getTeamByNationality($_POST['filter']);
            echo json_encode($data);
        }
    }
    elseif($_POST['action'] == 'add'){
        $teamName = $_POST['teamName'];
        $nationality = $_POST['nationality'];
        $headquarter = $_POST['headquarter'];
        $db->addTeam($teamName, $nationality, $headquarter);
    }
}