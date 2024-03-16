<?php
require_once 'bootstrap.php';

if(isset($_GET['teamId'])){
    $teamId = $_GET['teamId'];
}

$team = $db->getTeamById($teamId)[0];

$templateParams['team'] = $team;
$templateParams['name'] = 'team/teamPage.php';
$templateParams['title'] = 'F1Data - ' . $team['teamName'];

require 'template/base.php';