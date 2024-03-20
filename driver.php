<?php
require_once 'bootstrap.php';

switch ($_GET['page']) {
    case 'list':
        $templateParams['title'] = 'F1Data - Driver List';
        $templateParams['name'] = 'driver/driverListPage.php';
        break;
    
    case 'detail':
        if(isset($_GET['driverId'])){
            $driverId = $_GET['driverId'];
        }
        
        $driver = $db->getSingleDriver($driverId);
        
        $templateParams['driver'] = $driver;
        $templateParams['title'] = 'F1Data - ' . $driver['driverName'] . ' ' . $driver['driverSurname'];
        $templateParams['name'] = 'driver/driverPage.php';
        break;

    default:
        # code...
        break;
}

require 'template/base.php';