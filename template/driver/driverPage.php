<main class="float-end d-flex align-items-center flex-column overflow-auto">
<?php $driver = $templateParams['driver'];
    $results = $db->getDriverResultById($driver['idDriver']);
    $qualifying = $db->getQualifyingResultById($driver['idDriver']);
    $contracts = $db->getDriverContract($driver['idDriver']);
    $seasons = $db->getSeasonOfDriver($driver['idDriver'])?>
        <div class="p-4 text-center my-1">
            <h3 class="p-2"><?php echo $driver['driverName'] . ' ' . $driver['driverSurname']; ?></h3>
            <ul class="list-group list-group-horizontal col-10 mx-3">
                <li class="list-group-item"><h6>Nationality:</h6><p><?php echo $driver['nationality']; ?></p></li>
                <li class="list-group-item"><h6>Date of birth:</h6><p><?php echo $driver['dateOfBirth']; ?></p></li>
                <?php if ($driver['permanentNumber'] != null):?>
                    <li class="list-group-item"><h6>Number:</h6><p><?php echo $driver['permanentNumber']; ?></p></li>
                <?php endif; ?>
                <li class="list-group-item"><h6>Normal races won:</h6><p><?php echo $db->getNormalRacesWonByDriverId($driver['idDriver']) ?></p></li>
                <li class="list-group-item"><h6>Sprint races won:</h6><p><?php echo $db->getSprintRacesWonByDriverId($driver['idDriver']) ?></p></li>
            </ul>
        </div>

		<div class="border-top" style="height: 50%;">
        <h4 class="mt-3">Contracts</h4>
			<div class="tableDiv mt-4 mx-4">
				<table class="table">
					<thead class="sticky-top">
					<tr>
						<th scope="col">Sign year</th>
						<th scope="col">Expiration year</th>
						<th scope="col">Team</th>
					</tr>
					</thead>
					<tbody>
                        <?php foreach($contracts as $contract):
                        ?>
                        <tr>
                            <td><?php echo $contract['signingYear']; ?></td>
                            <td><?php echo $contract['expirationYear']; ?></td>
                            <td><a href="team.php?page=detail&teamId=<?php echo $contract['idTeam']; ?>"><?php echo $contract['teamName'] ?></a></td>
                        </tr>
                        <?php endforeach; ?>
					</tbody>
				</table>
			</div>
            <a href="contract.php?driverId=<?php echo $driver['idDriver']; ?>" class="btn w-100 mb-4">Add Contract</a>

            <h4>Race results</h4>
			<div class="tableDiv my-4 mx-4">
                <table class="table">
                    <thead class="sticky-top">
                        <tr>
                            <th scope="col">Race</th>
                            <th scope="col">Type</th>
                            <th scope="col">Season</th>
                            <th scope="col">Round</th>
							<th scope="col">Position</th>
                            <th scope="col">Fastest Lap</th>
                            <th scope="col">Status</th>
                            <th scope="col">Team</th>
                            <th scope="col">Race info</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach($results as $result):
                        ?>
                        <tr>
							<td><?php echo $result['trackName']; ?></td>
                            <td><?php echo $result['raceType']; ?></td>
							<td><?php echo $result['season']; ?></td>
							<td><?php echo $result['round']; ?></td>
							<td><?php echo $result['position']; ?></td>
                            <td><?php echo $result['fastestLap'];?></td>
                            <td><?php echo $result['endStatus']; ?></td>
                            <td><?php echo $result['teamName']; ?></td>
                            <td><a href="race.php?page=detail&raceId=<?php echo $result['idRace'] ?>" class="btn btn-dark">Information</a></td>
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
                            <th scope="col">Race</th>
                            <th scope="col">Type</th>
                            <th scope="col">Season</th>
                            <th scope="col">Round</th>
							<th scope="col">Position</th>
                            <th scope="col">Qualifying Lap</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach($qualifying as $quali):
                        ?>
                        <tr>
							<td><?php echo $quali['trackName']; ?></td>
                            <td><?php echo $quali['raceType'] ?></td>
							<td><?php echo $quali['season'] ?></td>
							<td><?php echo $quali['round']; ?></td>
							<td><?php echo $quali['position'] ?></td>
                            <td><?php echo $quali['qualificationTime'];?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="py-4">
                <h6>Select the season:</h6>
                <select class="form-control w-25" name="seasonSelect" id="seasonSelect" data-bs-driverId="<?php echo $driver['idDriver'] ?>">
                    <option value="" selected>No season Selected</option>
                    <?php foreach($seasons as $s): ?>
                        <option value="<?php echo $s['idChampionship'] ?>"><?php echo $s['season'] ?></option>
                    <?php endforeach; ?>
                </select>
                <p class="w-100 text-center mt-4 bold fs-5"><?php echo $driver['driverName'] . ' ' . $driver['driverSurname'] . ' ' . 'placement during season: '?><span id="yearTitle"></span></p>
                <div class="w-100 mt-4">
			        <canvas id="driverChart"></canvas>
		        </div>
            </div>
		</div>
        
    </main>
    <script src="./script/driverChart.js"></script>