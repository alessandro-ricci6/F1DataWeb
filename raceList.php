<?php
require_once 'bootstrap.php';
ini_set('display_errors', 1);
$templateParams['races'] = $db->getAllRaces();
$templateParams['name'] = 'race/raceListPage.php';
$templateParams['title'] = 'F1Data - Races List';

require 'template/base.php';