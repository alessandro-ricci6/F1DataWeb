<?php
session_start();
require "db/database.php";
$db = new DatabaseHelper("localhost", "root", "", "F1Data", 3306);