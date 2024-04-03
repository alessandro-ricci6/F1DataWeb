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
    elseif($_POST['action'] == 'addRace'){
        $championship = $_POST['season'];
        $round = $_POST['round'];
        $trackId = $_POST['track'];
        $raceType = $_POST['raceType'];
        $laps = $_POST['laps'];

        $db->addRace($championship, $round, $trackId, $raceType, $laps);
    }
    elseif($_POST['action'] == 'addQuali'){
        $raceId = $db->getLastRaceAdded();
        $driverId = $_POST['driver'];
        $position = $_POST['position'];
        $time = $_POST['time'];
    }
    elseif($_POST['action'] == 'addResult'){
        $race = $db->getLastRaceAdded();
        $driverId = $_POST['driver'];
        $position = $_POST['position'];
        $time = $_POST['time'];
        $teamId = $_POST['team'];
        $status = $_POST['endStatus'];
        if($race['raceType'] == 'Normal'){
            $points = getNormalPoints($position);
        } else {
            $points = getSprintPoints($position);
        }
        if($_POST['fastestLap'] = 'y'){
            $points = $points + 1;
        }
        $db->addRaceResult($race['idRace'], $driverId, $teamId, $position, $time, $points, $endStatus);
    }
}