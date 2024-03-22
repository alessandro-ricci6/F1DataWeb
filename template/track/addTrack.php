<main class="float-end d-flex align-items-center flex-column">
    <div class="fs-5 m-4 col-5 text-center">
        <h2>Add a track:</h2>
        <div class="py-2">
            <label for="nameInput">Track Name: </label>
            <input class="form-control border border-dark" type="text" name="nameInput" id="nameInput" required>
        </div>

        <div class="py-2">
            <label for="countryInput">Country: </label>
            <input class="form-control border border-dark" type="text" name="countryInput" id="countryInput" required>
        </div>

        <div class="py-2">
            <label for="cityInput">City: </label>
            <input class="form-control border border-dark" type="text" name="cityInput" id="cityInput">
        </div>

        <div class="py-2">
            <label for="lengthInput">Length: </label>
            <input class="form-control border border-dark" type="number" name="lengthInput" id="lengthInput" required>
        </div>

        <input class="btn btn-dark form-control mt-3" type="submit" value="Add track" id="addTrackBtn" onclick="addTrack()">
    </div>
</main>
<script src="./script/addScript.js"></script>