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
        $stmt = $this->db->prepare("SELECT * FROM Driver ORDER BY driverName");
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

    public function getNumberOfTracks() {
        $stmt = $this->db->prepare("SELECT count(idTrack) FROM Track");
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
        $stmt = $this->db->prepare("SELECT * FROM Team ORDER BY teamName");
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

        return $result->fetch_all(MYSQLI_ASSOC);
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
        $stmt = $this->db->prepare("SELECT RaceResult.fastestLap, Driver.driverName, Driver.driverSurname FROM RaceResult
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
        GROUP BY RaceResult.idDriver HAVING MIN(position) > 10
        ORDER BY racePartecipation DESC");
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getDriverWithTotPoint($points) {
        $stmt = $this->db->prepare("SELECT *, SUM(RaceResult.points) AS totPoints
        FROM Driver
        INNER JOIN RaceResult ON Driver.idDriver = RaceResult.idDriver
        GROUP BY RaceResult.idDriver
        HAVING SUM(points) >= ?
        ORDER BY totPoints DESC");
        $stmt->bind_param('i', $points);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getDriverWithOneWinInSeason() {
        $stmt = $this->db->prepare("SELECT Driver.*, COUNT(DISTINCT Championship.season) AS numSeason
        FROM Driver
        INNER JOIN RaceResult ON RaceResult.idDriver = Driver.idDriver
        INNER JOIN Race ON RaceResult.idRace = Race.idRace
        INNER JOIN Championship ON Race.idChampionship = Championship.idChampionship
        WHERE RaceResult.position = 1
        GROUP BY Driver.idDriver
        ORDER BY numSeason DESC");
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getTrackById($trackId) {
        $stmt = $this->db->prepare("SELECT * FROM Track WHERE idTrack = ?");
        $stmt->bind_param('i', $trackId);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getRacesOnTrack($trackId) {
        $stmt = $this->db->prepare("SELECT Race.*, Championship.season FROM Race
        INNER JOIN Championship ON Race.idChampionship = Championship.idChampionship
        WHERE idTrack = ?");
        $stmt->bind_param('i', $trackId);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }
    
    public function addContract($driverId, $teamId, $signYear, $expYear) {
        $stmt = $this->db->prepare("INSERT INTO Contract(idDriver, idTeam, signingYear, expirationYear) VALUE
        (?, ?, ?, ?)");
        $stmt->bind_param('iiii', $driverId, $teamId, $signYear, $expYear);
        $stmt->execute();
    }

    public function getAllTracks() {
        $stmt = $this->db->prepare("SELECT * FROM Track ORDER BY trackName");
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getTracksCountry() {
        $stmt = $this->db->prepare("SELECT DISTINCT country FROM Track");
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getTrackByCountry($country) {
        $stmt = $this->db->prepare("SELECT * FROM Track WHERE country = ?");
        $stmt->bind_param('s', $country);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function addDriver($name, $surname, $nationality, $number, $birth) {
        $stmt = $this->db->prepare("INSERT INTO Driver(driverName, driverSurname, nationality, permanentNumber, dateOfBirth) VALUE
        (?, ?, ?, ?, ?)");
        $stmt->bind_param('sssis', $name, $surname, $nationality, $number, $birth);
        $stmt->execute();
    }

    public function getSeasonById($id){
        $stmt = $this->db->prepare("SELECT * FROM Championship WHERE idChampionship = ?");
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getDriverChampResult($seasonId) {
        $stmt = $this->db->prepare("SELECT * FROM DriverChampResult WHERE idChampionship = ?
        ORDER BY total_points DESC");
        $stmt->bind_param('i', $seasonId);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getTeamChampResult($seasonId) {
        $stmt = $this->db->prepare("SELECT * FROM TeamChampResult WHERE idChampionship = ?
        ORDER BY total_points DESC");
        $stmt->bind_param('i', $seasonId);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function addTeam($name, $nationality, $headquarter) {
        $stmt = $this->db->prepare("INSERT INTO Team(teamName, nationality, headquarter) VALUE
        (?, ?, ?)");
        $stmt->bind_param('sss', $name, $nationality, $headquarter);
        $stmt->execute();
    }

    public function getSeasonOfDriver($driverId) {
        $stmt = $this->db->prepare("SELECT Championship.* FROM Race
        INNER JOIN RaceResult ON Race.idRace = RaceResult.idRace
        INNER JOIN Championship ON Race.idChampionship = Championship.idChampionship
        WHERE RaceResult.idDriver = ?
        GROUP BY Championship.idChampionship");
        $stmt->bind_param('i', $driverId);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getRaceOfDriverInSeason($driver, $season) {
        $stmt = $this->db->prepare("SELECT * FROM RaceResult
        INNER JOIN Race ON Race.idRace = RaceResult.idRace
        INNER JOIN Track ON Race.idTrack = Track.idTrack
        WHERE idDriver = ? AND idChampionship = ?
        ORDER BY round");
        $stmt->bind_param('ii', $driver, $season);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function searchDriver($input) {
        $stmt = $this->db->prepare("SELECT * FROM Driver 
        WHERE driverName LIKE '%{$input}%' OR driverSurname LIKE '%{$input}%'
        LIMIT 10");
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function addTrack($trackName, $country, $city, $length) {
        $stmt = $this->db->prepare("INSERT INTO Track(trackName, country, city, trackLength)
        VALUES (?, ?, ?, ?)");
        $stmt->bind_param('sssi', $trackName, $country, $city, $length);
        $stmt->execute();
    }

    public function addChampionship($season, $round){
        $stmt = $this->db->prepare("INSERT INTO Championship(season, roundNumber)
        VALUES (?, ?)");
        $stmt->bind_param('ii', $season, $round);
        $stmt->execute();
    }

    public function deleteContract($contractId){
        $stmt = $this->db->prepare("DELETE FROM Contract WHERE idContract = ?");
        $stmt->bind_param('i', $contractId);
        $stmt->execute();
    }

    public function updateContract($contractId, $expYear, $signYear, $teamId){
        $stmt = $this->db->prepare("UPDATE Contract
        SET idTeam = ?, expirationYear = ?, signingYear = ?
        WHERE idContract = ?");
        $stmt->bind_param('iiii', $teamId, $expYear, $signYear, $contractId);
        $stmt->execute();
    }

    public function getEmployeeOfTeam($teamId){
        $stmt = $this->db->prepare("SELECT * FROM Employee WHERE idTeam = ?");
        $stmt->bind_param('i', $teamId);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getRoles(){
        $stmt = $this->db->prepare("SELECT DISTINCT Employee.employeeRole FROM Employee");
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function addEmployee($name, $surname, $nationality, $role, $teamId){
        $stmt = $this->db->prepare("INSERT INTO Employee(employeeName, employeeSurname, employeeRole, nationality, idTeam)
        VALUE (?, ?, ?, ?, ?)");
        $stmt->bind_param('ssssi', $name, $surname, $role, $nationality, $teamId);
        $stmt->execute();
    }

    public function addRace($championshipId, $round, $trackId, $raceType, $laps) {
        $stmt = $this->db->prepare("INSERT INTO Race (idChampionship, round, idTrack, laps, raceType) VALUE
        (?, ?, ?, ?, ?)");
        $stmt->bind_param('iiiis', $championshipId, $round, $trackId, $laps, $raceType);
        $stmt->execute();
    }

    public function getLastRaceAdded(){
        $stmt = $this->db->prepare("SELECT idRace, raceType FROM Race ORDER BY idRace DESC LIMIT 1");
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function addStartingGrid($raceId, $driverId, $position, $time){
        $stmt = $this->db->prepare("INSERT INTO StartingGrid (idRace, idDriver, position, qualificationTime) VALUE
        (?, ?, ?, ?)");
        $stmt->bind_param('iiis', $raceId, $driverId, $position, $time);
        $stmt->execute();
    }

    public function addRaceResult($raceId, $driverId, $teamId, $position, $time, $points, $endStatus){
        $stmt = $this->db->prepare("INSERT INTO 
        RaceResult (idRace, idDriver, idTeam, position, fastestLap, points, endStatus) VALUE
        (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param('iiiisis', $raceId, $driverId, $teamId, $position, $time, $points, $endStatus);
        $stmt->execute();
    }

    public function getTopTenQualiTime($trackId){
        $stmt = $this->db->prepare("SELECT Driver.idDriver, Driver.driverName, Driver.driverSurname, StartingGrid.qualificationTime, Championship.season, Race.round
        FROM StartingGrid
        INNER JOIN Race ON Race.idRace = StartingGrid.idRace
        INNER JOIN Driver ON StartingGrid.idDriver = Driver.idDriver
        INNER JOIN Championship ON Race.idChampionship = Championship.idChampionship
        INNER JOIN Track ON Track.idTrack = Race.idTrack
        WHERE Track.idTrack = ? ORDER BY StartingGrid.qualificationTime
        LIMIT 10");
        $stmt->bind_param('i', $trackId);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getTopTenRaceTime($trackId) {
        $stmt = $this->db->prepare("SELECT Driver.idDriver, Driver.driverName, Driver.driverSurname, RaceResult.fastestLap, Championship.season, Race.round
        FROM RaceResult
        INNER JOIN Race ON Race.idRace = RaceResult.idRace
        INNER JOIN Driver ON RaceResult.idDriver = Driver.idDriver
        INNER JOIN Championship ON Race.idChampionship = Championship.idChampionship
        INNER JOIN Track ON Track.idTrack = Race.idTrack
        WHERE Track.idTrack = ? ORDER BY RaceResult.fastestLap
        LIMIT 10");
        $stmt->bind_param('i', $trackId);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getMostWinningDriverInTrack($idTrack){
        $stmt = $this->db->prepare("SELECT Driver.*, COUNT(RaceResult.idDriver) AS totalWin
        FROM Driver
        INNER JOIN RaceResult ON RaceResult.idDriver = Driver.idDriver
        INNER JOIN Race ON RaceResult.idRace = Race.idRace
        WHERE Race.idTrack = ? AND RaceResult.position = 1
        GROUP BY Driver.idDriver ORDER BY totalWin DESC LIMIT 1");
        $stmt->bind_param('i', $idTrack);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getDriverClassifiedRacePart(){
        $stmt = $this->db->prepare("SELECT Driver.*, COUNT(RaceResult.idRaceResult) AS racePart
        FROM Driver
        INNER JOIN RaceResult ON RaceResult.idDriver = Driver.idDriver
        GROUP BY Driver.idDriver ORDER BY racePart DESC");
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getDriverMostPole(){
        $stmt = $this->db->prepare("SELECT Driver.*, COUNT(StartingGrid.idStartingGrid) AS poleRes
        FROM Driver
        INNER JOIN StartingGrid ON StartingGrid.idDriver = Driver.idDriver
        WHERE StartingGrid.position = 1
        GROUP BY Driver.idDriver ORDER BY poleRes DESC");
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getDriverDiffTeamWin(){
        $stmt = $this->db->prepare("SELECT Driver.*, COUNT(DISTINCT RaceResult.idTeam) AS teamCount
        FROM Driver
        INNER JOIN RaceResult ON Driver.idDriver = RaceResult.idDriver
        WHERE RaceResult.position = 1
        GROUP BY Driver.idDriver
        ORDER BY teamCount DESC");
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function updateTrack($trackId, $name, $country, $city, $length){
        $stmt = $this->db->prepare("UPDATE Track
        SET trackName = ?, country = ?, city = ?, trackLength = ?
        WHERE idTrack = ?");
        $stmt->bind_param('sssii', $name, $country, $city, $length, $trackId);
        $stmt->execute();
    }

}