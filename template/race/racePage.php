<main class="float-end d-flex align-items-center flex-column overflow-auto">
<?php $race = $templateParams['race'];
    $results = $db->getResultOfRace($race['idRace']);
    ini_set('display_errors', 1);
    $qualiResult = $db->getQualiResultOfRace($race['idRace']);
    $fastestLap = $db->getFastestLapOfRace($race['idRace'])[0];?>
            <div class="p-4 text-center my-1">
                <h3 class="p-2"><?php echo $race['trackName']; ?></h3>
                <ul class="list-group list-group-horizontal col-10 mx-3">
                    <li class="list-group-item"><h6>Location:</h6><p><?php echo $race['city'] . ', ' . $race['country']; ?></p></li>
                    <li class="list-group-item"><h6>Season:</h6><p><?php echo $race['season']; ?></p></li>
                    <li class="list-group-item"><h6>Round:</h6><p><?php echo $race['round'] ?></p></li>
                    <li class="list-group-item"><h6>Race Type:</h6><p><?php echo $race['raceType'] ?></p></li>
                    <li class="list-group-item"><h6>Track:</h6><a class="btn btn-dark" href="./track.php?page=detail&trackId=<?php echo $race['idTrack']?>">Go to track page</a></li>
                </ul>
            </div>

		<div class="border-top" style="height: 50%;">

            <p class="fs-5 my-3"><span class="fs-5 fw-bold">Fastest Lap of race: </span> <?php echo $fastestLap['driverName'] . ' ' . $fastestLap['driverSurname']
            . ' in ' . $fastestLap['fastestLap'] ?></p>
            <h4>Race results</h4>
			<div class="tableDiv my-4 mx-4">
                <table class="table">
                    <thead class="sticky-top">
                        <tr>
							<th scope="col">Position</th>
                            <th scope="col">Driver</th>
                            <th scope="col">Fastest Lap</th>
                            <th scope="col">Status</th>
                            <th scope="col">Points</th>
                            <th scope="col">Team</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach($results as $result):
                        ?>
                        <tr>
							<td><?php echo $result['position']; ?></td>
                            <td><a href="driver.php?page=detail&driverId=<?php echo $result['idDriver'] ?>"><?php echo $result['driverName'] . ' ' . $result['driverSurname']; ?></a></td>
                            <td><?php echo $result['fastestLap'];?></td>
                            <td><?php echo $result['endStatus']; ?></td>
                            <td><?php echo $result['points']; ?></td>
                            <td><a href="team.php?page=detail&teamId=<?php echo $result['idTeam'] ?>"><?php echo $result['teamName']; ?></a></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <h4>Qualifying results</h4>
			<div class="tableDiv my-4 mx-4">
                <table class="table">
                    <thead class="sticky-top">
                        <tr>
                            <th scope="col">Driver</th>
							<th scope="col">Position</th>
                            <th scope="col">Qualifying Lap</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach($qualiResult as $quali):
                        ?>
                        <tr>
							<td><a href="driver.php?page=detail&driverId=<?php echo $quali['idDriver'] ?>"><?php echo $quali['driverName'] . ' ' . $quali['driverSurname']; ?></a></td>
							<td><?php echo $quali['position'] ?></td>
                            <td><?php echo $quali['qualificationTime'];?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

		</div>
    </main>