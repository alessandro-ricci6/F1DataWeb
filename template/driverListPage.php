<main class="float-end d-flex align-items-center flex-column">
    <?php
    $nationalities = $db->getDriverNationalities();
    $drivers = $db->getAllDriver();
    ?>
        <div class="col-3 text-center mt-4">
			<h2>List of all drivers:</h2>
            <label for="filterSelect">Select nationality to filter drivers: </label>
            <select class="form-select my-2" name="filterSelect" id="nationalitySelect">
                <option selected></option>
                <?php foreach($nationalities as $nationality): ?>
                    <option value="<?php echo $nationality['nationality']; ?>"><?php echo $nationality['nationality']; ?></option>
                <?php endforeach; ?>    
            </select>
        </div>
        <div class="tableDiv col-7 mt-4">
            <table class="table text-center table-striped" id="driverTable">
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
    </main>
    <script src="./script/driverList.js"></script>