<?php
require_once 'bootstrap.php';

if(isset($_GET['driverId'])){
    $driverId = $_GET['driverId'];
}

$driver = $db->getSingleDriver($driverId);

$templateParams['driver'] = $driver;
$templateParams['title'] = 'F1Data - ' . $driver['driverName'] . ' ' . $driver['driverSurname'];
$templateParams['name'] = 'driver/driverPage.php';

require 'template/base.php';