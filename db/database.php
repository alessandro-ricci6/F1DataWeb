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

    public function getSingleDriver($driverId) {
        $stmt = $this->db->prepare("SELECT * FROM Driver WHERE idDriver = ?");
        $stmt->bind_param('i', $driverId);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC)[0];
    }

    public function getDriverNationalities() {
        $stmt = $this->db->prepare("SELECT nationality FROM Driver GROUP BY nationality");
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getRaceById($raceId) {
        $stmt = $this->db->prepare("SELECT Race.laps, Race.round, Race.raceType, Track.trackName, Track.trackLength, Championship.season
        FROM Race INNER JOIN Track ON Race.idTrack = Track.idTrack 
        INNER JOIN Championship ON Race.idChampionship = Championship.idChampionship
        WHERE idRace = ?");
        $stmt->bind_param('i', $raceId);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC)[0];
    }

    public function getDriverResultById($driverId) {
        $stmt = $this->db->prepare("SELECT *
        FROM RaceResult
        INNER JOIN Race ON Race.idRace = RaceResult.idRace
        INNER JOIN Track ON Race.idTrack = Track.idTrack
        INNER JOIN Championship ON Race.idChampionship = Championship.idChampionship
        WHERE idDriver = ? ORDER BY Race.idRace ASC");
        $stmt->bind_param('i', $driverId);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getQualifyingResultById($driverId) {
        $stmt = $this->db->prepare("SELECT *
        FROM StartingGrid
        INNER JOIN Race ON Race.idRace = StartingGrid.idRace
        INNER JOIN Track ON Race.idTrack = Track.idTrack
        INNER JOIN Championship ON Race.idChampionship = Championship.idChampionship
        WHERE idDriver = ? ORDER BY Race.idRace ASC");
        $stmt->bind_param('i', $driverId);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getDriverByNationality($nationality) {
        $stmt = $this->db->prepare("SELECT * FROM Driver WHERE nationality = ?");
        $stmt->bind_param('s', $nationality);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getNormalRacesWonByDriverId($driverId){
        $stmt = $this->db->prepare("SELECT count(Race.idRace) FROM RaceResult
        INNER JOIN Race ON Race.idRace = RaceResult.idRace
        WHERE idDriver = ? AND position = 1 AND raceType = 'Normal'");
        $stmt->bind_param('i', $driverId);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_row()[0];
    }

    public function getSprintRacesWonByDriverId($driverId){
        $stmt = $this->db->prepare("SELECT count(Race.idRace) FROM RaceResult
        INNER JOIN Race ON Race.idRace = RaceResult.idRace
        WHERE idDriver = ? AND position = 1 AND raceType = 'Sprint'");
        $stmt->bind_param('i', $driverId);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_row()[0];
    }
}