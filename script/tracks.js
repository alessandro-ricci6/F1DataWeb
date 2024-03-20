function updateTable(trackList){
    tableBody = document.getElementById("trackTableBody")
    while (tableBody.firstChild) {
        tableBody.removeChild(tableBody.firstChild);
    }

    for(const index in trackList){
        tr = document.createElement("tr")
        track = trackList[index]
        tr.innerHTML = `
        <td><a href="./track.php?page=detail&trackId=${track.idTrack}">${track.trackName}</a></td>
        <td>${track.country}</td>
        <td>${track.city}</td>
        <td>${track.trackLength} m</td>`
        tableBody.appendChild(tr)
    }
}

function filterTracks(){
    select = document.getElementById("countrySelect")
    $(select).on("change", function(){
        $.ajax({
            type: "POST",
            url: "functions/track.php",
            data: {
                action: "filter",
                filter: select.value,
            },
            success: function (response) {
                trackList = JSON.parse(response)
                updateTable(trackList)
            }
        });
    })
}

$(document).ready(filterTracks)