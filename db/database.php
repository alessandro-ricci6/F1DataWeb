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
        $stmt = $this->db->prepare("SELECT Race.*, Track.*, Championship.season
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
        INNER JOIN Team ON RaceResult.idTeam = Team.idTeam
        WHERE idDriver = ? ORDER BY Championship.season, Race.round");
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
        WHERE idDriver = ? ORDER BY Championship.season, Race.round");
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

    public function getAllTeam() {
        $stmt = $this->db->prepare("SELECT * FROM Team");
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getTeamNationalities() {
        $stmt = $this->db->prepare("SELECT nationality FROM Team GROUP BY nationality");
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getTeamByNationality($nationality) {
        $stmt = $this->db->prepare("SELECT * FROM Team WHERE nationality = ?");
        $stmt->bind_param('s', $nationality);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getDriverContract($idDriver) {
        $stmt = $this->db->prepare("SELECT Contract.*, Team.teamName, Team.idTeam FROM Contract
        INNER JOIN Team ON Contract.idTeam = Team.idTeam
        WHERE idDriver = ?");
        $stmt->bind_param('i', $idDriver);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result;
    }

    public function getTeamContract($idTeam) {
        $stmt = $this->db->prepare("SELECT Contract.*, Driver.* FROM Contract
        INNER JOIN Driver ON Contract.idDriver = Driver.idDriver
        WHERE idTeam = ?");
        $stmt->bind_param('i', $idTeam);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result;
    }

    public function getTeamById($teamId) {
        $stmt = $this->db->prepare("SELECT * FROM Team WHERE idTeam = ?");
        $stmt->bind_param('i', $teamId);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getAllRaces() {
        $stmt = $this->db->prepare("SELECT Race.*, Championship.season, Track.* FROM Race
        INNER JOIN Championship ON Race.idChampionship  = Championship.idChampionship
        INNER JOIN Track ON Track.idTrack = Race.idTrack
        ORDER BY Championship.season, Race.round");
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getAllSeason() {
        $stmt = $this->db->prepare("SELECT * FROM Championship");
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getRacesBySeasonId($seasonId) {
        $stmt = $this->db->prepare("SELECT Race.*, Championship.season, Track.* FROM Race
        INNER JOIN Championship ON Race.idChampionship  = Championship.idChampionship
        INNER JOIN Track ON Track.idTrack = Race.idTrack
        WHERE Race.idChampionship = ?
        ORDER BY Championship.season, Race.round");
        $stmt->bind_param('i', $seasonId);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getResultOfRace($raceId) {
        $stmt = $this->db->prepare("SELECT RaceResult.*, Driver.*, Team.* FROM RaceResult
        INNER JOIN Driver ON RaceResult.idDriver = Driver.idDriver
        INNER JOIN Team ON RaceResult.idTeam = Team.idTeam
        WHERE idRace = ?");
        $stmt->bind_param('i', $raceId);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getFastestLapOfRace($raceId) {
        $stmt = $this->db->prepare("SELECT RaceResult.*, Driver.* FROM RaceResult
        INNER JOIN Driver ON RaceResult.idDriver = Driver.idDriver
        WHERE idRace = ? ORDER BY fastestLap LIMIT 1");
        $stmt->bind_param('i', $raceId);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getQualiResultOfRace($raceId) {
        $stmt = $this->db->prepare("SELECT StartingGrid.*, Driver.* FROM StartingGrid
        INNER JOIN Driver ON StartingGrid.idDriver = Driver.idDriver
        WHERE idRace = ?");
        $stmt->bind_param('i', $raceId);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getAllDriverWins() {
        $stmt = $this->db->prepare("SELECT Driver.*, COUNT(idRace) AS winsNumber
        FROM Driver
        INNER JOIN RaceResult ON Driver.idDriver = RaceResult.idDriver
        WHERE position = 1 GROUP BY idDriver
        ORDER BY winsNumber DESC");
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    //Driver never went in points
    public function neverPointsDriver() {
        $stmt = $this->db->prepare("SELECT *, COUNT(RaceResult.idRaceResult) AS racePartecipation
        FROM Driver
        INNER JOIN RaceResult ON Driver.idDriver = RaceResult.idDriver
        GROUP BY RaceResult.idDriver HAVING MIN(position) >= 10
        ORDER BY racePartecipation DESC");
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

}