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
    elseif($_POST['action'] == 'add') {
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $nationality = $_POST['nationality'];
        $number = $_POST['number'];
        $birth = date_create_from_format('Y-m-d', $_POST['birth']);
        $db->addDriver($name, $surname, $nationality, $number, $birth->format('Y-m-d'));
    }
    elseif($_POST['action'] == 'result'){
        $driverId = $_POST['driver'];
        $season = $_POST['season'];
        $data = $db->getRaceOfDriverInSeason($driverId, $season);

        echo json_encode($data);
    }
}