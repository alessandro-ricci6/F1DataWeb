<main class="float-end d-flex align-items-center flex-column overflow-auto">
	<?php $driverList = $db->getAllDriver(); ?>
		<h2>Qualifications Result</h2>
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
					<label class="my-2" for="d1Time">Qualification Time:</label>
					<input class="form-control border border-dark" type="text" name="d1Time" id="d1Time">
				</div>

				<div class="border rounded p-2 input-group-sm my-3">
					<p class="fs-5 bold">Position: 5</p>
					<label for="driverP5Select">Driver: </label>
					<select class="form-control border border-dark" name="driverP5" id="driverP5Select">
						<?php foreach($driverList as $driver):?>
							<option value="<?php echo $driver['idDriver'] ?>"><?php echo $driver['driverName'] . ' ' . $driver['driverSurname']; ?></option>
						<?php endforeach; ?>
					</select>
					<label class="my-2" for="d5Time">Qualification Time:</label>
					<input class="form-control border border-dark" type="text" name="d5Time" id="d5Time">
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
				</div>

				<div class="border rounded p-2 input-group-sm my-3">
					<p class="fs-5 bold">Position: 13</p>
					<label for="driverP13Select">Driver: </label>
					<select class="form-control border border-dark" name="driverP13" id="driverP13Select">
						<?php foreach($driverList as $driver):?>
							<option value="<?php echo $driver['idDriver'] ?>"><?php echo $driver['driverName'] . ' ' . $driver['driverSurname']; ?></option>
						<?php endforeach; ?>
					</select>
					<label class="my-2" for="d13Time">Qualification Time:</label>
					<input class="form-control border border-dark" type="text" name="d13Time" id="d13Time">
				</div>

				<div class="border rounded p-2 input-group-sm my-3">
					<p class="fs-5 bold">Position: 17</p>
					<label for="driverP17Select">Driver: </label>
					<select class="form-control border border-dark" name="driverP17" id="driverP17Select">
						<?php foreach($driverList as $driver):?>
							<option value="<?php echo $driver['idDriver'] ?>"><?php echo $driver['driverName'] . ' ' . $driver['driverSurname']; ?></option>
						<?php endforeach; ?>
					</select>
					<label class="my-2" for="d17Time">Qualification Time:</label>
					<input class="form-control border border-dark" type="text" name="d17Time" id="d17Time">
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
					<label class="my-2" for="d2Time">Qualification Time:</label>
					<input class="form-control border border-dark" type="text" name="d2Time" id="d2Time">
				</div>

				<div class="border rounded p-2 input-group-sm my-3">
					<p class="fs-5 bold">Position: 6</p>
					<label for="driverP6Select">Driver: </label>
					<select class="form-control border border-dark" name="driverP6" id="driverP6Select">
						<?php foreach($driverList as $driver):?>
							<option value="<?php echo $driver['idDriver'] ?>"><?php echo $driver['driverName'] . ' ' . $driver['driverSurname']; ?></option>
						<?php endforeach; ?>
					</select>
					<label class="my-2" for="d6Time">Qualification Time:</label>
					<input class="form-control border border-dark" type="text" name="d6Time" id="d6Time">
				</div>

				<div class="border rounded p-2 input-group-sm my-3">
					<p class="fs-5 bold">Position: 10</p>
					<label for="driverP10Select">Driver: </label>
					<select class="form-control border border-dark" name="driverP10" id="driverP10Select">
						<?php foreach($driverList as $driver):?>
							<option value="<?php echo $driver['idDriver'] ?>"><?php echo $driver['driverName'] . ' ' . $driver['driverSurname']; ?></option>
						<?php endforeach; ?>
					</select>
					<label class="my-2" for="d10Time">Qualification Time:</label>
					<input class="form-control border border-dark" type="text" name="d10Time" id="d10Time">
				</div>

				<div class="border rounded p-2 input-group-sm my-3">
					<p class="fs-5 bold">Position: 14</p>
					<label for="driverP14Select">Driver: </label>
					<select class="form-control border border-dark" name="driverP14" id="driverP14Select">
						<?php foreach($driverList as $driver):?>
							<option value="<?php echo $driver['idDriver'] ?>"><?php echo $driver['driverName'] . ' ' . $driver['driverSurname']; ?></option>
						<?php endforeach; ?>
					</select>
					<label class="my-2" for="d14Time">Qualification Time:</label>
					<input class="form-control border border-dark" type="text" name="d14Time" id="d14Time">
				</div>

				<div class="border rounded p-2 input-group-sm my-3">
					<p class="fs-5 bold">Position: 18</p>
					<label for="driverP18Select">Driver: </label>
					<select class="form-control border border-dark" name="driverP18" id="driverP18Select">
						<?php foreach($driverList as $driver):?>
							<option value="<?php echo $driver['idDriver'] ?>"><?php echo $driver['driverName'] . ' ' . $driver['driverSurname']; ?></option>
						<?php endforeach; ?>
					</select>
					<label class="my-2" for="d18Time">Qualification Time:</label>
					<input class="form-control border border-dark" type="text" name="d18Time" id="d18Time">
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
					<label class="my-2" for="d3Time">Qualification Time:</label>
					<input class="form-control border border-dark" type="text" name="d3Time" id="d3Time">
				</div>

				<div class="border rounded p-2 input-group-sm my-3">
					<p class="fs-5 bold">Position: 7</p>
					<label for="driverP7Select">Driver: </label>
					<select class="form-control border border-dark" name="driverP7" id="driverP7Select">
						<?php foreach($driverList as $driver):?>
							<option value="<?php echo $driver['idDriver'] ?>"><?php echo $driver['driverName'] . ' ' . $driver['driverSurname']; ?></option>
						<?php endforeach; ?>
					</select>
					<label class="my-2" for="d7Time">Qualification Time:</label>
					<input class="form-control border border-dark" type="text" name="d7Time" id="d7Time">
				</div>

				<div class="border rounded p-2 input-group-sm my-3">
					<p class="fs-5 bold">Position: 11</p>
					<label for="driverP11Select">Driver: </label>
					<select class="form-control border border-dark" name="driverP11" id="driverP11Select">
						<?php foreach($driverList as $driver):?>
							<option value="<?php echo $driver['idDriver'] ?>"><?php echo $driver['driverName'] . ' ' . $driver['driverSurname']; ?></option>
						<?php endforeach; ?>
					</select>
					<label class="my-2" for="d11Time">Qualification Time:</label>
					<input class="form-control border border-dark" type="text" name="d11Time" id="d11Time">
				</div>
				<div class="border rounded p-2 input-group-sm my-3">
					<p class="fs-5 bold">Position: 15</p>
					<label for="driverP15Select">Driver: </label>
					<select class="form-control border border-dark" name="driverP15" id="driverP15Select">
						<?php foreach($driverList as $driver):?>
							<option value="<?php echo $driver['idDriver'] ?>"><?php echo $driver['driverName'] . ' ' . $driver['driverSurname']; ?></option>
						<?php endforeach; ?>
					</select>
					<label class="my-2" for="d15Time">Qualification Time:</label>
					<input class="form-control border border-dark" type="text" name="d15Time" id="d15Time">
				</div>

				<div class="border rounded p-2 input-group-sm my-3">
					<p class="fs-5 bold">Position: 19</p>
					<label for="driverP19Select">Driver: </label>
					<select class="form-control border border-dark" name="driverP19" id="driverP19Select">
						<?php foreach($driverList as $driver):?>
							<option value="<?php echo $driver['idDriver'] ?>"><?php echo $driver['driverName'] . ' ' . $driver['driverSurname']; ?></option>
						<?php endforeach; ?>
					</select>
					<label class="my-2" for="d19Time">Qualification Time:</label>
					<input class="form-control border border-dark" type="text" name="d19Time" id="d19Time">
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
					<label class="my-2" for="d4Time">Qualification Time:</label>
					<input class="form-control border border-dark" type="text" name="d4Time" id="d4Time">
				</div>

				<div class="border rounded p-2 input-group-sm my-3">
					<p class="fs-5 bold">Position: 8</p>
					<label for="driverP8Select">Driver: </label>
					<select class="form-control border border-dark" name="driverP8" id="driverP8Select">
						<?php foreach($driverList as $driver):?>
							<option value="<?php echo $driver['idDriver'] ?>"><?php echo $driver['driverName'] . ' ' . $driver['driverSurname']; ?></option>
						<?php endforeach; ?>
					</select>
					<label class="my-2" for="d8Time">Qualification Time:</label>
					<input class="form-control border border-dark" type="text" name="d8Time" id="d8Time">
				</div>

				<div class="border rounded p-2 input-group-sm my-3">
					<p class="fs-5 bold">Position: 12</p>
					<label for="driverP12Select">Driver: </label>
					<select class="form-control border border-dark" name="driverP12" id="driverP12Select">
						<?php foreach($driverList as $driver):?>
							<option value="<?php echo $driver['idDriver'] ?>"><?php echo $driver['driverName'] . ' ' . $driver['driverSurname']; ?></option>
						<?php endforeach; ?>
					</select>
					<label class="my-2" for="d12Time">Qualification Time:</label>
					<input class="form-control border border-dark" type="text" name="d12Time" id="d12Time">
				</div>

				<div class="border rounded p-2 input-group-sm my-3">
					<p class="fs-5 bold">Position: 16</p>
					<label for="driverP16Select">Driver: </label>
					<select class="form-control border border-dark" name="driverP16" id="driverP16Select">
						<?php foreach($driverList as $driver):?>
							<option value="<?php echo $driver['idDriver'] ?>"><?php echo $driver['driverName'] . ' ' . $driver['driverSurname']; ?></option>
						<?php endforeach; ?>
					</select>
					<label class="my-2" for="d16Time">Qualification Time:</label>
					<input class="form-control border border-dark" type="text" name="d16Time" id="d16Time">
				</div>

				<div class="border rounded p-2 input-group-sm my-3">
					<p class="fs-5 bold">Position: 20</p>
					<label for="driverP20Select">Driver: </label>
					<select class="form-control border border-dark" name="driverP20" id="driverP20Select">
						<?php foreach($driverList as $driver):?>
							<option value="<?php echo $driver['idDriver'] ?>"><?php echo $driver['driverName'] . ' ' . $driver['driverSurname']; ?></option>
						<?php endforeach; ?>
					</select>
					<label class="my-2" for="d20Time">Qualification Time:</label>
					<input class="form-control border border-dark" type="text" name="d20Time" id="d20Time">
				</div>
			</div>
		</div>
		<button class="btn btn-dark w-25 my-3" onclick="addQuali()" data-bs-race="<?php echo $templateParams['raceId'] ?>" id="addQualiBtn"><i class="fa-solid fa-arrow-right"></i></button>
    </main>
	<script src="./script/addScript.js"></script>