create table Championship (
     idChampionship int not null auto_increment,
     season year not null,
     roundNumber int,
     primary key (idChampionship));

create table Driver (
     idDriver int not null auto_increment,
     driverName char(255) not null,
     driverSurname char(255) not null,
     nationality char(255) not null,
     dateOfBirth date not null,
     permanentNumber int check (permanentNumber > 0),
     primary key (idDriver));

create table Team (
     idTeam int not null auto_increment,
     teamName char(255) not null,
     nationality char(255) not null,
     headquarter char(255),
     primary key (idTeam));

create table Track (
     idTrack int not null auto_increment,
     trackName char(255) not null,
     country char(255) not null,
     city char(255) not null,
     trackLength int not null,
     primary key (idTrack));

create table Contract (
     idContract int not null auto_increment,
     idDriver int not null,
     idTeam int not null,
     signingYear int not null,
     expirationYear int not null,
     primary key (idContract),
     foreign key (idDriver) references Driver (idDriver),
     foreign key (idTeam) references Team (idTeam));

create table Employee (
     idEmployee int not null auto_increment,
     idTeam int not null,
     employeeRole char(255) not null,
     employeeName char(255) not null,
     employeeSurname char(255) not null,
     nationality char(255) not null,
     primary key (idEmployee),
     foreign key (idTeam) references Team (idTeam));

create table Race (
     idRace int not null auto_increment,
     idTrack int not null,
     idChampionship int not null,
     round int not null,
     laps int not null,
     raceType char(25) not null,
     raceDate date,
     raceName char(40),
     primary key (idRace),
     foreign key (idTrack) references Track (idTrack),
     foreign key (idChampionship) references Championship (idChampionship));

create table RaceResult (
     idRaceResult int not null auto_increment,
     idDriver int not null,
     idRace int not null,
     idTeam int not null,
     position char(5) not null,
     points float(1) not null,
     fastestLap char(15) not null,
     endStatus char(20) not null default 'Finished',
     primary key (idRaceResult),
     foreign key (idDriver) references Driver (idDriver),
     foreign key (idRace) references Race(idRace),
     foreign key (idTeam) references Team(idTeam));

create table StartingGrid (
     idStartingGrid int not null auto_increment,
     idDriver int not null,
     idRace int not null,
     position int not null,
     qualificationTime char(15),
     primary key (idStartingGrid),
     foreign key (idDriver) references Driver (idDriver),
     foreign key (idRace) references Race (idRace));

CREATE VIEW DriverChampResult AS
SELECT rr.idDriver,
	   CONCAT(d.driverName, ' ', d.driverSurname) AS driverName,
       r.idChampionship AS idChampionship,
       SUM(rr.points) AS total_points
FROM RaceResult rr
JOIN Driver d ON rr.idDriver = d.idDriver
JOIN Race r ON rr.idRace = r.idRace
GROUP BY rr.idDriver, r.idChampionship;

CREATE VIEW TeamChampResult AS
SELECT rr.idTeam,
	   t.teamName,
       r.idChampionship AS idChampionship,
       SUM(rr.points) AS total_points
FROM RaceResult rr
JOIN Team t ON rr.idTeam = t.idTeam
JOIN Race r ON rr.idRace = r.idRace
GROUP BY rr.idTeam, r.idChampionship;