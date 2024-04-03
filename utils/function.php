<?php
function predIsActive($id) {
    if($id == 1) {
        return 'disabled invisible';
    } else {
        return '';
    }
}

function raceNextIsActive($id, $num) {
    if($id == $num) {
        return 'disabled invisible';
    } else {
        return '';
    }
}

function isSelected($driverId, $id) {
    if($driverId == $id){
        return 'selected';
    } else {
        return '';
    }
}

function getNormalPoints($position) {
    switch ($position) {
        case 1:
            return 25;
        case 2:
            return 18;
        case 3:
            return 15;
        case 4:
            return 12;
        case 5:
            return 10;
        case 6:
            return 8;
        case 7:
            return 6;
        case 8:
            return 4;
        case 9:
            return 2;
        case 10:
            return 1;
        default:
            return 0;
    }
}

function getSprintPoints($position){
    switch ($position) {
        case 1:
            return 8;
        case 2:
            return 7;
        case 3:
            return 6;
        case 4:
            return 5;
        case 5:
            return 4;
        case 6:
            return 3;
        case 7:
            return 2;
        case 8:
            return 1;
        default:
            return 0;
    }
}