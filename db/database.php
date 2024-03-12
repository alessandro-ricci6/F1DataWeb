<?php

class DatabaseHelper {
    private $db;

    public function __construct($servername, $username, $password, $dbname, $port){
        $this->db = new mysqli($servername, $username, $password, $dbname, $port);
        if ($this->db->connect_error) {
            die("Connection failed: " . $this->db->connect_error);
        }        
    }

    public function getAllDriver() {
        $stmt = $this->db->prepare("SELECT * FROM Driver");
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getNumberOfDriver() {
        $stmt = $this->db->prepare("SELECT count(idDriver) FROM Driver");
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_row()[0];
    }

    public function getNumberOfRaces() {
        $stmt = $this->db->prepare("SELECT count(idRace) FROM Race");
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_row()[0];
    }

    public function getNumberOfChampionship() {
        $stmt = $this->db->prepare("SELECT count(idChampionship) FROM Championship");
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_row()[0];  
    }

    public function getNumberOfTeam() {
        $stmt = $this->db->prepare("SELECT count(idTeam) FROM Team");
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_row()[0];
    }
}