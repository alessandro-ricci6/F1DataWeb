<main class="float-end d-flex align-items-center flex-column overflow-auto">
<?php $track = $templateParams['track'];
        $races = $db->getRacesOnTrack($track['idTrack']);?>
        <div class="d-inline-flex flex-row w-100 justify-content-between px-5">
            <a href="trackDetail.php?trackId=<?php echo $track['idTrack'] - 1; ?>" class="btn my-5 <?php echo predIsActive($track['idTrack']) ?>"><i class="fa-solid fa-arrow-left fs-1"></i></a>
            <div class="p-4 text-center my-1">
                <h3 class="p-2"><?php echo $track['trackName']; ?></h3>
                <ul class="list-group list-group-horizontal col-10 mx-3">
                    <li class="list-group-item"><h6>Location:</h6><p><?php echo $track['city'] . ', ' . $track['country']; ?></p></li>
                    <li class="list-group-item"><h6>Length:</h6><p><?php echo $track['trackLength'] . ' ' . 'm'; ?></p></li>
                </ul>
            </div>
            <a href="trackDetail.php?trackId=<?php echo $track['idTrack'] + 1; ?>" class="btn my-5 <?php echo raceNextIsActive($track['idTrack'], $db->getNumberOfTracks()) ?>"><i class="fa-solid fa-arrow-right fs-1"></i></a>
        </div>

		<div class="border-top w-75" style="height: 50%;">

            <h4>Races:</h4>
			<div class="tableDiv my-4 mx-4">
                <table class="table">
                    <thead class="sticky-top">
                        <tr>
							<th scope="col">Season</th>
                            <th scope="col">Round</th>
                            <th scope="col">Laps</th>
                            <th scope="col">Race type</th>
                            <th scope="col">Race information</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach($races as $race):
                        ?>
                        <tr>
							<td><?php echo $race['season']; ?></td>
                            <td><?php echo $race['round']; ?></td>
                            <td><?php echo $race['laps'];?></td>
                            <td><?php echo $race['raceType'];?></td>
                            <td>
                                <a class="btn btn-dark" href="./raceDetail.php?raceId=<?php echo $race['idRace']?>">Info</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

		</div>
    </main>