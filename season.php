<?php
require_once 'bootstrap.php';

switch ($_GET['page']) {
    case 'list':
        $templateParams['title'] = 'F1Data - Season list';
        $templateParams['name'] = 'season/seasonList.php';
        $templateParams['season'] = $db->getAllSeason();
        break;
    
    case 'detail':
        if(isset($_GET['seasonId'])){
            $seasonId = $_GET['seasonId'];
        }
        $season = $db->getSeasonById($seasonId)[0];
        $templateParams['title'] = 'F1Data - ' . $season['season'];
        $templateParams['name'] = 'season/seasonPage.php';
        $templateParams['season'] = $season;
        break;

    default:
        # code...
        break;
}
require 'template/base.php';