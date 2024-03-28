<main class="float-end d-flex align-items-center flex-column">
    <?php
    $season = $templateParams['season'];
    $tracks = $templateParams['tracks'];
    ?>
        <div class="driverForm m-4 col-5 text-center">
            <h2>Add a race:</h2>

                <div class="py-2">
                    <label for="seasonSelect">Championship: </label>
                    <select class="form-select border-dark" name="seasonSelect" id="seasonSelect">
                        <?php foreach($season as $s): ?>
                        <option value="<?php echo $s['idChampionship']; ?>"><?php echo $s['season']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="py-2">
                    <label for="trackSelect">Track: </label>
                    <select class="form-select border-dark addRaceSelect" name="trackSelect" id="trackSelect">
                        <?php foreach($tracks as $track): ?>
                        <option value="<?php echo $track['idTrack']; ?>"><?php echo $track['trackName']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="py-2">
                    <label for="roundInput">Round: </label>
                    <input class="form-control border border-dark" type="number" name="roundInput" id="roundInput">
                </div>
    
                <div class="mt-3 d-flex">
                    <p>Race type:</p>
                    <div class="form-check mx-5">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="normaleRadio" checked>
                        <label class="form-check-label" for="flexRadioDefault1">
                            Normal
                        </label>
                    </div>
                    <div class="form-check mx-5">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="sprintRadio">
                        <label class="form-check-label" for="flexRadioDefault2">
                            Sprint
                        </label>
                    </div>
                </div>

                <div class="py-2">
                    <label for="lapsInput">Laps: </label>
                    <input class="form-control border border-dark" type="number" name="lapsInput" id="lapsInput">
                </div>

                <a class="btn btn-dark mt-3 w-50" href="race.php?page=addQualification"><i class="fa-solid fa-arrow-right"></i></a>
        </div>
    </main>