<main class="float-end d-flex align-items-center flex-column">
<?php $season = $templateParams['season']; 
    $races = $db->getRacesBySeasonId($season['idChampionship'])?>
        <div class="p-4 text-center" style="margin-top:20px">
            <h3 class="p-2 mx-auto"><?php echo $season['season'] ?></h3>
            <ul class="list-group list-group-horizontal col-10 mx-3">
                <li class="list-group-item"><h6>Number of races: </h6><p class="fs-4"><?php echo $season['roundNumber'] ?></p></li>
            </ul>
        </div>

        <div class="d-flex border-top" style="height: 50%;">
            <div class="tableDiv my-4 mx-4 text-center">
                <h4>Races</h4>
                <table class="table">
                    <thead class="sticky-top">
                        <tr>
                            <th scope="col">Round</th>
                            <th scope="col">Track</th>
                            <th scope="col">Race type</th>
                            <th scope="col">Race Info</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($races as $race):?>
                        <tr>
                            <td><?php echo $race['round'] ?></td>
                            <td><?php echo $race['trackName'] ?></td>
                            <td><?php echo $race['raceType'] ?></td>
                            <td><a class="btn btn-dark" href="race.php?page=detail&raceId=<?php echo $race['idRace']; ?>">Information</a></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <div class="tableDiv my-4 mx-4 text-center">
                <h4>Team Standing</h4>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Position</th>
                            <th scope="col">Team</th>
                            <th scope="col">Points</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Red Bull</td>
                            <td>392</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <div class="tableDiv my-4 mx-4 text-center">
                <h4>Driver Standing</h4>
                <table class="table">
                    <thead>
                        <tr>
                            <th class="col">Position</th>
                            <th scope="col">Driver</th>
                            <th scope="col">Points</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Max Verstappen</td>
                            <td>231</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </main>