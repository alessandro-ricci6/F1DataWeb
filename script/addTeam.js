function validateTeamForm(teamName, nationality, headquarter){
    if(teamName != '' & nationality != '' & headquarter != ''){
        return true
    }
    return false
}

function addTeam(){
    teamName = document.getElementById("nameInput")
    nationality = document.getElementById("nationalityInput")
    headquarter = document.getElementById("headquarterInput")
    if(validateTeamForm(teamName.value, nationality.value, headquarter.value)){
        $.ajax({
            type: "POST",
            url: "functions/team.php",
            data: {
                action: "add",
                teamName: teamName.value,
                nationality: nationality.value,
                headquarter: headquarter.value
            },
            success: function (response) {
                console.log(response)
                console.log("OK")
            }
        });
    } else {
        alert("Fill the form to add a team")
    }
}