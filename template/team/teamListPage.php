<main class="float-end d-flex align-items-center flex-column">
    <?php
    $teamList = $db->getAllTeam();
    $nationalities = $db->getTeamNationalities();
    ?>
        <div class="col-3 text-center mt-4">
			<h2>List of all team:</h2>
            <label for="filterSelect">Select nationality to filter team: </label>
            <select class="form-select my-2" name="filterSelect" id="nationalitySelect">
                <option selected>No filter</option>
                <?php foreach($nationalities as $nationality): ?>
                    <option value="<?php echo $nationality['nationality']; ?>"><?php echo $nationality['nationality']; ?></option>
                <?php endforeach; ?>    
            </select>
        </div>
        <div class="tableDiv col-7 mt-4">
            <table class="table text-center table-striped">
                <thead class="sticky-top">
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Nationality</th>
                        <th scope="col">Headquarter</th>
                    </tr>
                </thead>

                <tbody id="teamTableBody">
                    <?php foreach ($teamList as $team):?>
                    <tr>
                        <td><a href="./team.php?page=detail&teamId=<?php echo $team['idTeam']; ?>"><?php echo $team['teamName']; ?></a></td>
                        <td><?php echo $team['nationality']; ?></td>
                        <td><?php echo $team['headquarter']; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </main>
<script src="./script/teamList.js"></script>