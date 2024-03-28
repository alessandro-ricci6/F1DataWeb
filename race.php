<?php
require_once 'bootstrap.php';

switch ($_GET['page']) {
    case 'list':
        $templateParams['races'] = $db->getAllRaces();
        $templateParams['name'] = 'race/raceListPage.php';
        $templateParams['title'] = 'F1Data - Races List';
        break;
    
    case 'detail':
        if(isset($_GET['raceId'])) {
            $raceId = $_GET['raceId'];
        }
        
        $templateParams['title'] = 'F1Data - Race Detail';
        $templateParams['race'] = $db->getRaceById($raceId);
        $templateParams['name'] = 'race/racePage.php';
        break;

    case 'add':
        $templateParams['title'] = 'F1Data - Add Race';
        $templateParams['name'] = 'race/addRace.php';
        $templateParams['season'] = $db->getAllSeason();
        $templateParams['tracks'] = $db->getAllTracks();
        break;

    case 'addQualification':

        $templateParams['title'] = 'F1Data - Add Qualification';
        $templateParams['name'] = 'race/addQuali.php';
        break;

        case 'addResult':

            $templateParams['title'] = 'F1Data - Add Resuòt';
            $templateParams['name'] = 'race/addResult.php';
            break;

    default:
        # code...
        break;
}

require 'template/base.php';