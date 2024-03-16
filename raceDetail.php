<?php
require_once 'bootstrap.php';

if(isset($_GET['raceId'])) {
    $raceId = $_GET['raceId'];
}

$templateParams['title'] = 'F1Data - Race Detail';
$templateParams['race'] = $db->getRaceById($raceId);
$templateParams['name'] = 'race/racePage.php';

require 'template/base.php';