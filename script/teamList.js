function updateTable(teamList){
    tableBody = document.getElementById("teamTableBody")
    while (tableBody.firstChild) {
        tableBody.removeChild(tableBody.firstChild);
    }

    for(const index in teamList){
        tr = document.createElement("tr")
        team = teamList[index]
        tr.innerHTML = `
        <td><a href="#">${team.teamName}</a></td>
        <td>${team.nationality}</td>
        <td>${team.headquarter}</td>`
        tableBody.appendChild(tr)
    }
}

function filterNationality() {
    selector = document.getElementById("nationalitySelect")
    $(selector).on("change", function(){
        nationality = selector.options[selector.selectedIndex].value
        $.ajax({
            method: "POST",
            url: "./functions/team.php",
            data: {
                filter: nationality,
                action: "filter",
            },
            success: function (response) {
                teamList = JSON.parse(response)
                updateTable(teamList)
            }
        });
    })
}

$(document).ready(filterNationality)