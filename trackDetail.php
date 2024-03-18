<?php
require_once 'bootstrap.php';

if(isset($_GET['trackId'])) {
    $trackId = $_GET['trackId'];
}

$track = $db->getTrackById($trackId)[0];

$templateParams['track'] = $track;
$templateParams['name'] = 'track/trackPage.php';
$templateParams['title'] = 'F1Data - ' . $track['trackName'];

require 'template/base.php';