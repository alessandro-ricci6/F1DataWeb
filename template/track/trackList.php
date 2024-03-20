<main class="float-end d-flex align-items-center flex-column">
    <?php $tracks = $templateParams['tracks'];
    $countries = $db->getTracksCountry();?>
    <div class="col-3 text-center mt-4">
		<h2>List of all tracks:</h2>
        <label for="filterSelect">Select country to filter tracks: </label>
            <select class="form-select my-2" name="filterSelect" id="countrySelect">
                <option selected>No filter</option>
                <?php foreach($countries as $country): ?>
                    <option value="<?php echo $country['country']; ?>"><?php echo $country['country']; ?></option>
                <?php endforeach; ?>    
            </select>
    </div>
    <div class="tableDiv col-7 mt-4">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Country</th>
                    <th scope="col">City</th>
                    <th scope="col">Length</th>
                </tr>
            </thead>
            <tbody id="trackTableBody">
                <?php foreach($tracks as $track): ?>
                <tr>
                    <td><a href="./track.php?page=detail&trackId=<?php echo $track['idTrack'] ?>"><?php echo $track['trackName'] ?></a></td>
                    <td><?php echo $track['country']; ?></td>
                    <td><?php echo $track['city'] ?></td>
                    <td><?php echo $track['trackLength'] . ' m' ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</main>
<script src="./script/tracks.js"></script>