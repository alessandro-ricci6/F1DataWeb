<main class="float-end d-flex align-items-center flex-column overflow-auto">
<?php $driver = $templateParams['driver'];
ini_set('display_errors', 1);
    $results = $db->getDriverResultById($driver['idDriver']);
    $qualifying = $db->getQualifyingResultById($driver['idDriver']);?>
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
        <h4>Contracts</h4>
			<div class="tableDiv my-4 mx-4">
				<table class="table">
					<thead class="sticky-top">
					<tr>
						<th scope="col">Sign year</th>
						<th scope="col">Expiration year</th>
						<th scope="col">Team</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>2018</td>
						<td>2019</td>
						<td><a href="#">Sauber</a></td>
					</tr>
					<tr>
						<td>2019</td>
						<td>2026</td>
						<td><a href="#">Ferrari</a></td>
					</tr>
					</tbody>
				</table>
			</div>

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
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach($results as $result):
                        ?>
                        <tr>
							<td><?php echo $result['trackName']; ?></td>
                            <td><?php echo $result['raceType'] ?></td>
							<td><?php echo $result['season'] ?></td>
							<td><?php echo $result['round']; ?></td>
							<td><?php echo $result['position'] ?></td>
                            <td><?php echo $result['fastestLap'];?></td>
                            <td><?php echo $result['endStatus']; ?></td>
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

		</div>
    </main>