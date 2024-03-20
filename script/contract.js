function validateForm(signYear, expYear) {
    if (signYear != '' & expYear != '' & signYear <= expYear){
        return true
    }
    return false
}

function addContract(){
    addBtn = document.getElementById("addContractBtn")
    driverSelect = document.getElementById("driverSelect")
    teamSelect = document.getElementById("teamSelect")
    addBtn.addEventListener("click", function (event) {
        driverId = driverSelect.options[driverSelect.selectedIndex].value
        teamId = teamSelect.options[teamSelect.selectedIndex].value
        signYear = document.getElementById("signInput")
        expYear = document.getElementById("expirationInput")

        if(validateForm(signYear.value, expYear.value)){
            console.log(driverId)
            console.log(teamId)
            console.log(signYear.value)
            console.log(expYear.value)
            $.ajax({
                method: "POST",
                url: "./functions/contract.php",
                data: {
                    driverId: driverId,
                    teamId: teamId,
                    signYear: signYear.value,
                    expYear: expYear.value,
                    action: "add",
                },
                success: function (response) {
                    console.log(response)
                }
            });
        } else {
            alert("Error")
        }
    })
}

$(document).ready(addContract())