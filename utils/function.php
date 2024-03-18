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