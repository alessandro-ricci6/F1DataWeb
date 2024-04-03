<main class="float-end d-flex align-items-center flex-column overflow-auto">
<?php $driverList = $db->getAllDriver(); 
	  $teamList = $db->getAllTeam();?>
		<h2>Race Result</h2>
        <div class="row">

			<div class="col mx-3 px-4">

				<div class="border rounded p-2 input-group-sm my-3">
					<p class="fs-5 bold">Position: 1</p>
					<label for="driverP1Select">Driver: </label>
					<select class="form-control border border-dark" name="driverP1" id="driverP1Select">
						<?php foreach($driverList as $driver):?>
							<option value="<?php echo $driver['idDriver'] ?>"><?php echo $driver['driverName'] . ' ' . $driver['driverSurname']; ?></option>
						<?php endforeach; ?>
					</select>
					<label class="my-2" for="d1Time">Fastest Lap:</label>
					<input class="form-control border border-dark" type="text" name="d1Time" id="d1Time">
                    <label class="my-2" for="teamP1Select">Team:</label>
                    <select class="form-control border border-dark" name="teamP1" id="teamP1Select">
						<?php foreach($teamList as $team):?>
							<option value="<?php echo $team['idTeam']?>"><?php echo $team['teamName']?></option>
						<?php endforeach;?>
					</select>
					<label class="my-2" for="endStatusP1">End Status:</label>
					<select class="form-control border border-dark" name="endStatusP1" id="endStatusP1Select">
						<option value="Finished">Finished</option>
						<option value="Retired">Retired</option>
						<option value="Withdrawn">Withdrawn</option>
						<option value="Not qualified">Not qualified</option>
						<option value="Disqualified">Disqualified</option>
						<option value="Excluded">Excluded</option>
					</select>
					<div class="my-2">
						<input class="form-check-input" type="checkbox" value="fastesLap" id="fastestLapP1">
						<label class="form-check-label" for="fastestLapP1">
							Fastest Lap of the race
						</label>
					</div>
				</div>

				<div class="border rounded p-2 input-group-sm my-3">
					<p class="fs-5 bold">Position: 5</p>
					<label for="driverP5Select">Driver: </label>
					<select class="form-control border border-dark" name="driverP5" id="driverP5Select">
						<?php foreach($driverList as $driver):?>
							<option value="<?php echo $driver['idDriver'] ?>"><?php echo $driver['driverName'] . ' ' . $driver['driverSurname']; ?></option>
						<?php endforeach; ?>
					</select>
					<label class="my-2" for="d5Time">Fastest Lap:</label>
					<input class="form-control border border-dark" type="text" name="d5Time" id="d5Time">
                    <label class="my-2" for="teamP5Select">Team:</label>
                    <select class="form-control border border-dark" name="teamP5" id="teamP5Select">
						<?php foreach($teamList as $team):?>
							<option value="<?php echo $team['idTeam']?>"><?php echo $team['teamName']?></option>
						<?php endforeach;?>
					</select>
					<label class="my-2" for="endStatusP5">End Status:</label>
					<select class="form-control border border-dark" name="endStatusP5" id="endStatusP5Select">
						<option value="Finished">Finished</option>
						<option value="Retired">Retired</option>
						<option value="Withdrawn">Withdrawn</option>
						<option value="Not qualified">Not qualified</option>
						<option value="Disqualified">Disqualified</option>
						<option value="Excluded">Excluded</option>
					</select>
					<div class="my-2">
						<input class="form-check-input" type="checkbox" value="fastesLap" id="fastestLapP5">
						<label class="form-check-label" for="fastestLapP5">
							Fastest Lap of the race
						</label>
					</div>
				</div>

				<div class="border rounded p-2 input-group-sm my-3">
					<p class="fs-5 bold">Position: 9</p>
					<label for="driverP9Select">Driver: </label>
					<select class="form-control border border-dark" name="driverP9" id="driverP9Select">
						<?php foreach($driverList as $driver):?>
							<option value="<?php echo $driver['idDriver'] ?>"><?php echo $driver['driverName'] . ' ' . $driver['driverSurname']; ?></option>
						<?php endforeach; ?>
					</select>
					<label class="my-2" for="d9Time">Qualification Time:</label>
					<input class="form-control border border-dark" type="text" name="d9Time" id="d9Time">
                    <label class="my-2" for="teamP9Select">Team:</label>
                    <select class="form-control border border-dark" name="teamP9" id="teamP9Select">
						<?php foreach($teamList as $team):?>
							<option value="<?php echo $team['idTeam']?>"><?php echo $team['teamName']?></option>
						<?php endforeach;?>
					</select>
					<label class="my-2" for="endStatusP9">End Status:</label>
					<select class="form-control border border-dark" name="endStatusP9" id="endStatusP9Select">
						<option value="Finished">Finished</option>
						<option value="Retired">Retired</option>
						<option value="Withdrawn">Withdrawn</option>
						<option value="Not qualified">Not qualified</option>
						<option value="Disqualified">Disqualified</option>
						<option value="Excluded">Excluded</option>
					</select>
					<div class="my-2">
						<input class="form-check-input" type="checkbox" value="fastesLap" id="fastestLapP9">
						<label class="form-check-label" for="fastestLapP9">
							Fastest Lap of the race
						</label>
					</div>
				</div>

				<div class="border rounded p-2 input-group-sm my-3">
					<p class="fs-5 bold">Position: 13</p>
					<label for="driverP13Select">Driver: </label>
					<select class="form-control border border-dark" name="driverP13" id="driverP13Select">
						<?php foreach($driverList as $driver):?>
							<option value="<?php echo $driver['idDriver'] ?>"><?php echo $driver['driverName'] . ' ' . $driver['driverSurname']; ?></option>
						<?php endforeach; ?>
					</select>
					<label class="my-2" for="d13Time">Fastest Lap:</label>
					<input class="form-control border border-dark" type="text" name="d13Time" id="d13Time">
                    <label class="my-2" for="teamP13Select">Team:</label>
                    <select class="form-control border border-dark" name="teamP13" id="teamP13Select">
						<?php foreach($teamList as $team):?>
							<option value="<?php echo $team['idTeam']?>"><?php echo $team['teamName']?></option>
						<?php endforeach;?>
					</select>
					<label class="my-2" for="endStatusP13">End Status:</label>
					<select class="form-control border border-dark" name="endStatusP13" id="endStatusP13Select">
						<option value="Finished">Finished</option>
						<option value="Retired">Retired</option>
						<option value="Withdrawn">Withdrawn</option>
						<option value="Not qualified">Not qualified</option>
						<option value="Disqualified">Disqualified</option>
						<option value="Excluded">Excluded</option>
					</select>
					<div class="my-2">
						<input class="form-check-input" type="checkbox" value="fastesLap" id="fastestLapP13">
						<label class="form-check-label" for="fastestLapP13">
							Fastest Lap of the race
						</label>
					</div>
				</div>

				<div class="border rounded p-2 input-group-sm my-3">
					<p class="fs-5 bold">Position: 17</p>
					<label for="driverP17Select">Driver: </label>
					<select class="form-control border border-dark" name="driverP17" id="driverP17Select">
						<?php foreach($driverList as $driver):?>
							<option value="<?php echo $driver['idDriver'] ?>"><?php echo $driver['driverName'] . ' ' . $driver['driverSurname']; ?></option>
						<?php endforeach; ?>
					</select>
					<label class="my-2" for="d17Time">Fastest Lap:</label>
					<input class="form-control border border-dark" type="text" name="d17Time" id="d17Time">
                    <label class="my-2" for="teamP17Select">Team:</label>
                    <select class="form-control border border-dark" name="teamP17" id="teamP17Select">
						<?php foreach($teamList as $team):?>
							<option value="<?php echo $team['idTeam']?>"><?php echo $team['teamName']?></option>
						<?php endforeach;?>
					</select>
					<label class="my-2" for="endStatusP17">End Status:</label>
					<select class="form-control border border-dark" name="endStatusP17" id="endStatusP17Select">
						<option value="Finished">Finished</option>
						<option value="Retired">Retired</option>
						<option value="Withdrawn">Withdrawn</option>
						<option value="Not qualified">Not qualified</option>
						<option value="Disqualified">Disqualified</option>
						<option value="Excluded">Excluded</option>
					</select>
					<div class="my-2">
						<input class="form-check-input" type="checkbox" value="fastesLap" id="fastestLapP17">
						<label class="form-check-label" for="fastestLapP17">
							Fastest Lap of the race
						</label>
					</div>
				</div>
			</div>

			<div class="col mx-3 px-4">
				<div class="border rounded p-2 input-group-sm my-3">
					<p class="fs-5 bold">Position: 2</p>
					<label for="driverP2Select">Driver: </label>
					<select class="form-control border border-dark" name="driverP2" id="driverP2Select">
						<?php foreach($driverList as $driver):?>
							<option value="<?php echo $driver['idDriver'] ?>"><?php echo $driver['driverName'] . ' ' . $driver['driverSurname']; ?></option>
						<?php endforeach; ?>
					</select>
					<label class="my-2" for="d2Time">Fastest Lap:</label>
					<input class="form-control border border-dark" type="text" name="d2Time" id="d2Time">
                    <label class="my-2" for="teamP2Select">Team:</label>
                    <select class="form-control border border-dark" name="teamP2" id="teamP2Select">
						<?php foreach($teamList as $team):?>
							<option value="<?php echo $team['idTeam']?>"><?php echo $team['teamName']?></option>
						<?php endforeach;?>
					</select>
					<label class="my-2" for="endStatusP2">End Status:</label>
					<select class="form-control border border-dark" name="endStatusP2" id="endStatusP2Select">
						<option value="Finished">Finished</option>
						<option value="Retired">Retired</option>
						<option value="Withdrawn">Withdrawn</option>
						<option value="Not qualified">Not qualified</option>
						<option value="Disqualified">Disqualified</option>
						<option value="Excluded">Excluded</option>
					</select>
					<div class="my-2">
						<input class="form-check-input" type="checkbox" value="fastesLap" id="fastestLapP2">
						<label class="form-check-label" for="fastestLapP2">
							Fastest Lap of the race
						</label>
					</div>
				</div>

				<div class="border rounded p-2 input-group-sm my-3">
					<p class="fs-5 bold">Position: 6</p>
					<label for="driverP6Select">Driver: </label>
					<select class="form-control border border-dark" name="driverP6" id="driverP6Select">
						<?php foreach($driverList as $driver):?>
							<option value="<?php echo $driver['idDriver'] ?>"><?php echo $driver['driverName'] . ' ' . $driver['driverSurname']; ?></option>
						<?php endforeach; ?>
					</select>
					<label class="my-2" for="d6Time">Fastest Lap:</label>
					<input class="form-control border border-dark" type="text" name="d6Time" id="d6Time">
                    <label class="my-2" for="teamP6Select">Team:</label>
                    <select class="form-control border border-dark" name="teamP6" id="teamP6Select">
						<?php foreach($teamList as $team):?>
							<option value="<?php echo $team['idTeam']?>"><?php echo $team['teamName']?></option>
						<?php endforeach;?>
					</select>
					<label class="my-2" for="endStatusP6">End Status:</label>
					<select class="form-control border border-dark" name="endStatusP6" id="endStatusP6Select">
						<option value="Finished">Finished</option>
						<option value="Retired">Retired</option>
						<option value="Withdrawn">Withdrawn</option>
						<option value="Not qualified">Not qualified</option>
						<option value="Disqualified">Disqualified</option>
						<option value="Excluded">Excluded</option>
					</select>
					<div class="my-2">
						<input class="form-check-input" type="checkbox" value="fastesLap" id="fastestLapP6">
						<label class="form-check-label" for="fastestLapP6">
							Fastest Lap of the race
						</label>
					</div>
				</div>

				<div class="border rounded p-2 input-group-sm my-3">
					<p class="fs-5 bold">Position: 10</p>
					<label for="driverP10Select">Driver: </label>
					<select class="form-control border border-dark" name="driverP10" id="driverP10Select">
						<?php foreach($driverList as $driver):?>
							<option value="<?php echo $driver['idDriver'] ?>"><?php echo $driver['driverName'] . ' ' . $driver['driverSurname']; ?></option>
						<?php endforeach; ?>
					</select>
					<label class="my-2" for="d10Time">Fastest Lap:</label>
					<input class="form-control border border-dark" type="text" name="d10Time" id="d10Time">
                    <label class="my-2" for="teamP10Select">Team:</label>
                    <select class="form-control border border-dark" name="teamP10" id="teamP10Select">
						<?php foreach($teamList as $team):?>
							<option value="<?php echo $team['idTeam']?>"><?php echo $team['teamName']?></option>
						<?php endforeach;?>
					</select>
					<label class="my-2" for="endStatusP10">End Status:</label>
					<select class="form-control border border-dark" name="endStatusP10" id="endStatusP10Select">
						<option value="Finished">Finished</option>
						<option value="Retired">Retired</option>
						<option value="Withdrawn">Withdrawn</option>
						<option value="Not qualified">Not qualified</option>
						<option value="Disqualified">Disqualified</option>
						<option value="Excluded">Excluded</option>
					</select>
					<div class="my-2">
						<input class="form-check-input" type="checkbox" value="fastesLap" id="fastestLapP10">
						<label class="form-check-label" for="fastestLapP10">
							Fastest Lap of the race
						</label>
					</div>
				</div>

				<div class="border rounded p-2 input-group-sm my-3">
					<p class="fs-5 bold">Position: 14</p>
					<label for="driverP14Select">Driver: </label>
					<select class="form-control border border-dark" name="driverP14" id="driverP14Select">
						<?php foreach($driverList as $driver):?>
							<option value="<?php echo $driver['idDriver'] ?>"><?php echo $driver['driverName'] . ' ' . $driver['driverSurname']; ?></option>
						<?php endforeach; ?>
					</select>
					<label class="my-2" for="d14Time">Fastest Lap:</label>
					<input class="form-control border border-dark" type="text" name="d14Time" id="d14Time">
                    <label class="my-2" for="teamP14Select">Team:</label>
                    <select class="form-control border border-dark" name="teamP14" id="teamP14Select">
						<?php foreach($teamList as $team):?>
							<option value="<?php echo $team['idTeam']?>"><?php echo $team['teamName']?></option>
						<?php endforeach;?>
					</select>
					<label class="my-2" for="endStatusP14">End Status:</label>
					<select class="form-control border border-dark" name="endStatusP14" id="endStatusP14Select">
						<option value="Finished">Finished</option>
						<option value="Retired">Retired</option>
						<option value="Withdrawn">Withdrawn</option>
						<option value="Not qualified">Not qualified</option>
						<option value="Disqualified">Disqualified</option>
						<option value="Excluded">Excluded</option>
					</select>
					<div class="my-2">
						<input class="form-check-input" type="checkbox" value="fastesLap" id="fastestLapP14">
						<label class="form-check-label" for="fastestLapP14">
							Fastest Lap of the race
						</label>
					</div>
				</div>

				<div class="border rounded p-2 input-group-sm my-3">
					<p class="fs-5 bold">Position: 18</p>
					<label for="driverP18Select">Driver: </label>
					<select class="form-control border border-dark" name="driverP18" id="driverP18Select">
						<?php foreach($driverList as $driver):?>
							<option value="<?php echo $driver['idDriver'] ?>"><?php echo $driver['driverName'] . ' ' . $driver['driverSurname']; ?></option>
						<?php endforeach; ?>
					</select>
					<label class="my-2" for="d18Time">Fastest Lap:</label>
					<input class="form-control border border-dark" type="text" name="d18Time" id="d18Time">
                    <label class="my-2" for="teamP18Select">Team:</label>
                    <select class="form-control border border-dark" name="teamP18" id="teamP18Select">
						<?php foreach($teamList as $team):?>
							<option value="<?php echo $team['idTeam']?>"><?php echo $team['teamName']?></option>
						<?php endforeach;?>
					</select>
					<label class="my-2" for="endStatusP18">End Status:</label>
					<select class="form-control border border-dark" name="endStatusP18" id="endStatusP18Select">
						<option value="Finished">Finished</option>
						<option value="Retired">Retired</option>
						<option value="Withdrawn">Withdrawn</option>
						<option value="Not qualified">Not qualified</option>
						<option value="Disqualified">Disqualified</option>
						<option value="Excluded">Excluded</option>
					</select>
					<div class="my-2">
						<input class="form-check-input" type="checkbox" value="fastesLap" id="fastestLapP18">
						<label class="form-check-label" for="fastestLapP18">
							Fastest Lap of the race
						</label>
					</div>
				</div>
			</div>
			
			<div class="col mx-3 px-4">

				<div class="border rounded p-2 input-group-sm my-3">
					<p class="fs-5 bold">Position: 3</p>
					<label for="driverP3Select">Driver: </label>
					<select class="form-control border border-dark" name="driverP3" id="driverP3Select">
						<?php foreach($driverList as $driver):?>
							<option value="<?php echo $driver['idDriver'] ?>"><?php echo $driver['driverName'] . ' ' . $driver['driverSurname']; ?></option>
						<?php endforeach; ?>
					</select>
					<label class="my-2" for="d3Time">Fastest Lap:</label>
					<input class="form-control border border-dark" type="text" name="d3Time" id="d3Time">
                    <label class="my-2" for="teamP3Select">Team:</label>
                    <select class="form-control border border-dark" name="teamP3" id="teamP3Select">
						<?php foreach($teamList as $team):?>
							<option value="<?php echo $team['idTeam']?>"><?php echo $team['teamName']?></option>
						<?php endforeach;?>
					</select>
					<label class="my-2" for="endStatusP3">End Status:</label>
					<select class="form-control border border-dark" name="endStatusP3" id="endStatusP3Select">
						<option value="Finished">Finished</option>
						<option value="Retired">Retired</option>
						<option value="Withdrawn">Withdrawn</option>
						<option value="Not qualified">Not qualified</option>
						<option value="Disqualified">Disqualified</option>
						<option value="Excluded">Excluded</option>
					</select>
					<div class="my-2">
						<input class="form-check-input" type="checkbox" value="fastesLap" id="fastestLapP3">
						<label class="form-check-label" for="fastestLapP3">
							Fastest Lap of the race
						</label>
					</div>
				</div>

				<div class="border rounded p-2 input-group-sm my-3">
					<p class="fs-5 bold">Position: 7</p>
					<label for="driverP7Select">Driver: </label>
					<select class="form-control border border-dark" name="driverP7" id="driverP7Select">
						<?php foreach($driverList as $driver):?>
							<option value="<?php echo $driver['idDriver'] ?>"><?php echo $driver['driverName'] . ' ' . $driver['driverSurname']; ?></option>
						<?php endforeach; ?>
					</select>
					<label class="my-2" for="d7Time">Fastest Lap:</label>
					<input class="form-control border border-dark" type="text" name="d7Time" id="d7Time">
                    <label class="my-2" for="teamP7Select">Team:</label>
                    <select class="form-control border border-dark" name="teamP7" id="teamP7Select">
						<?php foreach($teamList as $team):?>
							<option value="<?php echo $team['idTeam']?>"><?php echo $team['teamName']?></option>
						<?php endforeach;?>
					</select>
					<label class="my-2" for="endStatusP7">End Status:</label>
					<select class="form-control border border-dark" name="endStatusP7" id="endStatusP7Select">
						<option value="Finished">Finished</option>
						<option value="Retired">Retired</option>
						<option value="Withdrawn">Withdrawn</option>
						<option value="Not qualified">Not qualified</option>
						<option value="Disqualified">Disqualified</option>
						<option value="Excluded">Excluded</option>
					</select>
					<div class="my-2">
						<input class="form-check-input" type="checkbox" value="fastesLap" id="fastestLapP7">
						<label class="form-check-label" for="fastestLapP7">
							Fastest Lap of the race
						</label>
					</div>
				</div>

				<div class="border rounded p-2 input-group-sm my-3">
					<p class="fs-5 bold">Position: 11</p>
					<label for="driverP11Select">Driver: </label>
					<select class="form-control border border-dark" name="driverP11" id="driverP11Select">
						<?php foreach($driverList as $driver):?>
							<option value="<?php echo $driver['idDriver'] ?>"><?php echo $driver['driverName'] . ' ' . $driver['driverSurname']; ?></option>
						<?php endforeach; ?>
					</select>
					<label class="my-2" for="d11Time">Fastest Lap:</label>
					<input class="form-control border border-dark" type="text" name="d11Time" id="d11Time">
                    <label class="my-2" for="teamP11Select">Team:</label>
                    <select class="form-control border border-dark" name="teamP11" id="teamP11Select">
						<?php foreach($teamList as $team):?>
							<option value="<?php echo $team['idTeam']?>"><?php echo $team['teamName']?></option>
						<?php endforeach;?>
					</select>
					<label class="my-2" for="endStatusP11">End Status:</label>
					<select class="form-control border border-dark" name="endStatusP11" id="endStatusP11Select">
						<option value="Finished">Finished</option>
						<option value="Retired">Retired</option>
						<option value="Withdrawn">Withdrawn</option>
						<option value="Not qualified">Not qualified</option>
						<option value="Disqualified">Disqualified</option>
						<option value="Excluded">Excluded</option>
					</select>
					<div class="my-2">
						<input class="form-check-input" type="checkbox" value="fastesLap" id="fastestLapP11">
						<label class="form-check-label" for="fastestLapP11">
							Fastest Lap of the race
						</label>
					</div>
				</div>

				<div class="border rounded p-2 input-group-sm my-3">
					<p class="fs-5 bold">Position: 15</p>
					<label for="driverP15Select">Driver: </label>
					<select class="form-control border border-dark" name="driverP15" id="driverP15Select">
						<?php foreach($driverList as $driver):?>
							<option value="<?php echo $driver['idDriver'] ?>"><?php echo $driver['driverName'] . ' ' . $driver['driverSurname']; ?></option>
						<?php endforeach; ?>
					</select>
					<label class="my-2" for="d15Time">Fastest Lap:</label>
					<input class="form-control border border-dark" type="text" name="d15Time" id="d15Time">
                    <label class="my-2" for="teamP15Select">Team:</label>
                    <select class="form-control border border-dark" name="teamP15" id="teamP15Select">
						<?php foreach($teamList as $team):?>
							<option value="<?php echo $team['idTeam']?>"><?php echo $team['teamName']?></option>
						<?php endforeach;?>
					</select>
					<label class="my-2" for="endStatusP15">End Status:</label>
					<select class="form-control border border-dark" name="endStatusP15" id="endStatusP15Select">
						<option value="Finished">Finished</option>
						<option value="Retired">Retired</option>
						<option value="Withdrawn">Withdrawn</option>
						<option value="Not qualified">Not qualified</option>
						<option value="Disqualified">Disqualified</option>
						<option value="Excluded">Excluded</option>
					</select>
					<div class="my-2">
						<input class="form-check-input" type="checkbox" value="fastesLap" id="fastestLapP15">
						<label class="form-check-label" for="fastestLapP15">
							Fastest Lap of the race
						</label>
					</div>
				</div>

				<div class="border rounded p-2 input-group-sm my-3">
					<p class="fs-5 bold">Position: 19</p>
					<label for="driverP19Select">Driver: </label>
					<select class="form-control border border-dark" name="driverP19" id="driverP19Select">
						<?php foreach($driverList as $driver):?>
							<option value="<?php echo $driver['idDriver'] ?>"><?php echo $driver['driverName'] . ' ' . $driver['driverSurname']; ?></option>
						<?php endforeach; ?>
					</select>
					<label class="my-2" for="d19Time">Fastest Lap:</label>
					<input class="form-control border border-dark" type="text" name="d19Time" id="d19Time">
                    <label class="my-2" for="teamP19Select">Team:</label>
                    <select class="form-control border border-dark" name="teamP19" id="teamP19Select">
						<?php foreach($teamList as $team):?>
							<option value="<?php echo $team['idTeam']?>"><?php echo $team['teamName']?></option>
						<?php endforeach;?>
					</select>
					<label class="my-2" for="endStatusP19">End Status:</label>
					<select class="form-control border border-dark" name="endStatusP19" id="endStatusP19Select">
						<option value="Finished">Finished</option>
						<option value="Retired">Retired</option>
						<option value="Withdrawn">Withdrawn</option>
						<option value="Not qualified">Not qualified</option>
						<option value="Disqualified">Disqualified</option>
						<option value="Excluded">Excluded</option>
					</select>
					<div class="my-2">
						<input class="form-check-input" type="checkbox" value="fastesLap" id="fastestLapP19">
						<label class="form-check-label" for="fastestLapP19">
							Fastest Lap of the race
						</label>
					</div>
				</div>
			</div>

			<div class="col mx-3 px-4">
				<div class="border rounded p-2 input-group-sm my-3">
					<p class="fs-5 bold">Position: 4</p>
					<label for="driverP4Select">Driver: </label>
					<select class="form-control border border-dark" name="driverP4" id="driverP4Select">
						<?php foreach($driverList as $driver):?>
							<option value="<?php echo $driver['idDriver'] ?>"><?php echo $driver['driverName'] . ' ' . $driver['driverSurname']; ?></option>
						<?php endforeach; ?>
					</select>
					<label class="my-2" for="d4Time">Fastest Lap:</label>
					<input class="form-control border border-dark" type="text" name="d4Time" id="d4Time">
                    <label class="my-2" for="teamP4Select">Team:</label>
                    <select class="form-control border border-dark" name="teamP4" id="teamP4Select">
						<?php foreach($teamList as $team):?>
							<option value="<?php echo $team['idTeam']?>"><?php echo $team['teamName']?></option>
						<?php endforeach;?>
					</select>
					<label class="my-2" for="endStatusP4">End Status:</label>
					<select class="form-control border border-dark" name="endStatusP4" id="endStatusP4Select">
						<option value="Finished">Finished</option>
						<option value="Retired">Retired</option>
						<option value="Withdrawn">Withdrawn</option>
						<option value="Not qualified">Not qualified</option>
						<option value="Disqualified">Disqualified</option>
						<option value="Excluded">Excluded</option>
					</select>
					<div class="my-2">
						<input class="form-check-input" type="checkbox" value="fastesLap" id="fastestLapP4">
						<label class="form-check-label" for="fastestLapP4">
							Fastest Lap of the race
						</label>
					</div>
				</div>

				<div class="border rounded p-2 input-group-sm my-3">
					<p class="fs-5 bold">Position: 8</p>
					<label for="driverP8Select">Driver: </label>
					<select class="form-control border border-dark" name="driverP8" id="driverP8Select">
						<?php foreach($driverList as $driver):?>
							<option value="<?php echo $driver['idDriver'] ?>"><?php echo $driver['driverName'] . ' ' . $driver['driverSurname']; ?></option>
						<?php endforeach; ?>
					</select>
					<label class="my-2" for="d8Time">Fastest Lap:</label>
					<input class="form-control border border-dark" type="text" name="d8Time" id="d8Time">
                    <label class="my-2" for="teamP8Select">Team:</label>
                    <select class="form-control border border-dark" name="teamP8" id="teamP8Select">
						<?php foreach($teamList as $team):?>
							<option value="<?php echo $team['idTeam']?>"><?php echo $team['teamName']?></option>
						<?php endforeach;?>
					</select>
					<label class="my-2" for="endStatusP8">End Status:</label>
					<select class="form-control border border-dark" name="endStatusP8" id="endStatusP8Select">
						<option value="Finished">Finished</option>
						<option value="Retired">Retired</option>
						<option value="Withdrawn">Withdrawn</option>
						<option value="Not qualified">Not qualified</option>
						<option value="Disqualified">Disqualified</option>
						<option value="Excluded">Excluded</option>
					</select>
					<div class="my-2">
						<input class="form-check-input" type="checkbox" value="fastesLap" id="fastestLapP8">
						<label class="form-check-label" for="fastestLapP8">
							Fastest Lap of the race
						</label>
					</div>
				</div>

				<div class="border rounded p-2 input-group-sm my-3">
					<p class="fs-5 bold">Position: 12</p>
					<label for="driverP12Select">Driver: </label>
					<select class="form-control border border-dark" name="driverP12" id="driverP12Select">
						<?php foreach($driverList as $driver):?>
							<option value="<?php echo $driver['idDriver'] ?>"><?php echo $driver['driverName'] . ' ' . $driver['driverSurname']; ?></option>
						<?php endforeach; ?>
					</select>
					<label class="my-2" for="d12Time">Fastest Lap:</label>
					<input class="form-control border border-dark" type="text" name="d12Time" id="d12Time">
                    <label class="my-2" for="teamP12Select">Team:</label>
                    <select class="form-control border border-dark" name="teamP12" id="teamP12Select">
						<?php foreach($teamList as $team):?>
							<option value="<?php echo $team['idTeam']?>"><?php echo $team['teamName']?></option>
						<?php endforeach;?>
					</select>
					<label class="my-2" for="endStatusP12">End Status:</label>
					<select class="form-control border border-dark" name="endStatusP12" id="endStatusP12Select">
						<option value="Finished">Finished</option>
						<option value="Retired">Retired</option>
						<option value="Withdrawn">Withdrawn</option>
						<option value="Not qualified">Not qualified</option>
						<option value="Disqualified">Disqualified</option>
						<option value="Excluded">Excluded</option>
					</select>
					<div class="my-2">
						<input class="form-check-input" type="checkbox" value="fastesLap" id="fastestLapP12">
						<label class="form-check-label" for="fastestLapP12">
							Fastest Lap of the race
						</label>
					</div>
                </div>

				<div class="border rounded p-2 input-group-sm my-3">
					<p class="fs-5 bold">Position: 16</p>
					<label for="driverP16Select">Driver: </label>
					<select class="form-control border border-dark" name="driverP16" id="driverP16Select">
						<?php foreach($driverList as $driver):?>
							<option value="<?php echo $driver['idDriver'] ?>"><?php echo $driver['driverName'] . ' ' . $driver['driverSurname']; ?></option>
						<?php endforeach; ?>
					</select>
					<label class="my-2" for="d16Time">Fastest Lap:</label>
					<input class="form-control border border-dark" type="text" name="d16Time" id="d16Time">
                    <label class="my-2" for="teamP16Select">Team:</label>
                    <select class="form-control border border-dark" name="teamP16" id="teamP16Select">
						<?php foreach($teamList as $team):?>
							<option value="<?php echo $team['idTeam']?>"><?php echo $team['teamName']?></option>
						<?php endforeach;?>
					</select>
					<label class="my-2" for="endStatusP16">End Status:</label>
					<select class="form-control border border-dark" name="endStatusP16" id="endStatusP16Select">
						<option value="Finished">Finished</option>
						<option value="Retired">Retired</option>
						<option value="Withdrawn">Withdrawn</option>
						<option value="Not qualified">Not qualified</option>
						<option value="Disqualified">Disqualified</option>
						<option value="Excluded">Excluded</option>
					</select>
					<div class="my-2">
						<input class="form-check-input" type="checkbox" value="fastesLap" id="fastestLapP16">
						<label class="form-check-label" for="fastestLapP16">
							Fastest Lap of the race
						</label>
					</div>
                </div>

				<div class="border rounded p-2 input-group-sm my-3">
					<p class="fs-5 bold">Position: 20</p>
					<label for="driverP20Select">Driver: </label>
					<select class="form-control border border-dark" name="driverP20" id="driverP20Select">
						<?php foreach($driverList as $driver):?>
							<option value="<?php echo $driver['idDriver'] ?>"><?php echo $driver['driverName'] . ' ' . $driver['driverSurname']; ?></option>
						<?php endforeach; ?>
					</select>
					<label class="my-2" for="d20Time">Fastest Lap:</label>
					<input class="form-control border border-dark" type="text" name="d20Time" id="d20Time">
                    <label class="my-2" for="teamP20Select">Team:</label>
                    <select class="form-control border border-dark" name="teamP20" id="teamP20Select">
						<?php foreach($teamList as $team):?>
							<option value="<?php echo $team['idTeam']?>"><?php echo $team['teamName']?></option>
						<?php endforeach;?>
					</select>
					<label class="my-2" for="endStatusP20">End Status:</label>
						<select class="form-control border border-dark" name="endStatusP20" id="endStatusP20Select">
							<option value="Finished">Finished</option>
							<option value="Retired">Retired</option>
							<option value="Withdrawn">Withdrawn</option>
							<option value="Not qualified">Not qualified</option>
							<option value="Disqualified">Disqualified</option>
							<option value="Excluded">Excluded</option>
						</select>
					<div class="my-2">
						<input class="form-check-input" type="checkbox" value="fastesLap" id="fastestLapP20">
						<label class="form-check-label" for="fastestLapP20">
							Fastest Lap of the race
						</label>
					</div>
                </div>
			</div>
		</div>
		<button class="btn btn-dark w-25 my-3" onclick="addResult()"><i class="fa-solid fa-arrow-right"></i></button>
    </main>
	<script src="./script/addScript.js"></script>