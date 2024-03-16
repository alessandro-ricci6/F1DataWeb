<main class="float-end d-flex align-items-center flex-column overflow-auto text-center">
    <?php
    $nationalities = $db->getDriverNationalities();
    $drivers = $db->getAllDriver();
    $winsDriver = $db->getAllDriverWins();
    ?>
        <div class="col-3 text-center mt-4">
			<h2>List of all drivers:</h2>
            <label for="filterSelect">Select nationality to filter drivers: </label>
            <select class="form-select my-2" name="filterSelect" id="nationalitySelect">
                <option selected>No filter</option>
                <?php foreach($nationalities as $nationality): ?>
                    <option value="<?php echo $nationality['nationality']; ?>"><?php echo $nationality['nationality']; ?></option>
                <?php endforeach; ?>    
            </select>
        </div>
        <div class="tableDiv col-7 mt-4">
            <table class="table text-center table-striped" id="allDriverTable">
                <thead class="sticky-top">
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Date of birth</th>
                        <th scope="col">Nationality</th>
                        <th scope="col">Number</th>
                    </tr>
                </thead>

                <tbody id="driverTableBody">
                    <?php foreach($drivers as $driver): ?>

                    <tr>
                        <td><a href="./driverDetail.php?driverId=<?php echo $driver['idDriver']; ?>"><?php echo $driver['driverName'] . ' ' . $driver['driverSurname']; ?></a></td>
                        <td><?php echo $driver['dateOfBirth']; ?></td>
                        <td><?php echo $driver['nationality']; ?></td>
                        <td><?php echo $driver['permanentNumber']; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <h4 class="mt-5 pt-3 w-75 border-top border-dark-subtle">Driver with most wins:</h4>
        <p>Normal and Sprint races</p>
        <div class="tableDiv col-7 mt-4">
            <table class="table text-center table-striped" id="victoryDriverTable">
                <thead class="sticky-top">
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Number of victory</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach($winsDriver as $driver): ?>

                    <tr>
                        <td><a href="./driverDetail.php?driverId=<?php echo $driver['idDriver']; ?>"><?php echo $driver['driverName'] . ' ' . $driver['driverSurname']; ?></a></td>
                        <td><?php echo $driver['winsNumber']; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <h4 class="mt-5 pt-3 w-75 border-top border-dark-subtle">Driver with most race partecipations but 0 points scored:</h4>
        <p>Normal and Sprint races</p>
        <div class="tableDiv col-7 mt-4">
            <table class="table text-center table-striped" id="victoryDriverTable">
                <thead class="sticky-top">
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Number of races</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach($db->neverPointsDriver() as $driver): ?>

                    <tr>
                        <td><a href="./driverDetail.php?driverId=<?php echo $driver['idDriver']; ?>"><?php echo $driver['driverName'] . ' ' . $driver['driverSurname']; ?></a></td>
                        <td><?php echo $driver['racePartecipation']; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <h4 class="mt-5 pt-3 w-75 border-top border-dark-subtle">Search driver with at least total amount points scored:</h4>
        <p>Normal and Sprint races</p>
        <label for="pointInput">Points:</label>
        <div>
            <input class="border border-dark rounded" type="number" name="pointInput" id="pointInput">
            <button class="btn btn-dark" id="pointBtn"><i class="fa-solid fa-arrow-right"></i></button></div>
        <div class="tableDiv col-7 mt-4">
            <table class="table text-center table-striped" id="victoryDriverTable">
                <thead class="sticky-top">
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Number of points</th>
                    </tr>
                </thead>

                <tbody id="pointsTableBody">
                    <?php foreach($db->getDriverWithTotPoint(0) as $driver): ?>

                    <tr>
                        <td><a href="./driverDetail.php?driverId=<?php echo $driver['idDriver']; ?>"><?php echo $driver['driverName'] . ' ' . $driver['driverSurname']; ?></a></td>
                        <td><?php echo $driver['totPoints']; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <h4 class="mt-5 pt-3 w-75 border-top border-dark-subtle">Driver with at least 1 win for season:</h4>
        <p>Normal and Sprint races</p>
        <div class="tableDiv col-7 mt-4">
            <table class="table text-center table-striped">
                <thead class="sticky-top">
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Number of season</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach($db->getDriverWithOneWinInSeason() as $driver): ?>

                    <tr>
                        <td><a href="./driverDetail.php?driverId=<?php echo $driver['idDriver']; ?>"><?php echo $driver['driverName'] . ' ' . $driver['driverSurname']; ?></a></td>
                        <td><?php echo $driver['numSeason']; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

    </main>
    <script src="./script/driverList.js"></script>