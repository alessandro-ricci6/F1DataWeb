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
        $race = $db->getLastRaceAdded()[0];
        $qualiList = json_decode($_POST['list'], true);
        foreach($qualiList as $q){
            $db->addStartingGrid($race['idRace'], $q['driver'], $q['position'], $q['time']);
        }
    }
    elseif($_POST['action'] == 'addResult'){
        $race = $db->getLastRaceAdded()[0];
        $resList = json_decode($_POST['list'], true);
        foreach($resList as $r){
            $points = 0;
            if($race['raceType'] == 'Normal'){
                $points = getNormalPoints($r['position']);
            } else {
                $points = getSprintPoints($r['position']);
            }
            echo $r['fastLap'];
            if($r['fastLap'] == 'y' && $r['position'] <= 10){
                $points = $points + 1;
            }
            echo $points;
            $db->addRaceResult($race['idRace'], $r['driver'], $r['team'], $r['position'], $r['time'], $points, $r['endStatus']);
        }
        
    }
}