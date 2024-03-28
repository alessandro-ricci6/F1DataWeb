<?php

require_once 'bootstrap.php';
ini_set('display_errorse', 1);
switch ($_GET['page']) {
    case 'add':
        if(isset($_GET['teamId'])){
            $teamId = $_GET['teamId'];
        }
        $templateParams['title'] = 'F1Data - Add Employee';
        $templateParams['name'] = 'employee/addEmployee.php';
        $templateParams['idTeam'] = $teamId;
        break;
    
    default:
        # code...
        break;
}
require 'template/base.php';