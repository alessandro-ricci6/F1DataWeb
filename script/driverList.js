function getDriverNumber(numb){
    if(numb == null){
        return ""
    }else{
        return numb
    }
}

function updateTable(driverList){
    tableBody = document.getElementById("driverTableBody")
    while (tableBody.firstChild) {
        tableBody.removeChild(tableBody.firstChild);
    }

    for(const index in driverList){
        tr = document.createElement("tr")
        driver = driverList[index]
        tr.innerHTML = `
        <td><a href="./driverDetail.php?driverId=${driver.idDriver}">${driver.driverName + " " + driver.driverSurname}</a></td>
        <td>${driver.dateOfBirth}</td>
        <td>${driver.nationality}</td>
        <td>${getDriverNumber(driver.permanentNumber)}</td>`
        tableBody.appendChild(tr)
        console.log(driver)
    }
}

function filterNationality(){
    selector = document.getElementById("nationalitySelect")
    $(selector).on("change", function(){
        nationality = selector.options[selector.selectedIndex].value
        $.ajax({
            method: "POST",
            url: "./functions/driver.php",
            data: {
                filter: nationality,
                action: "filter",
            },
            success: function (response) {
                driverList = JSON.parse(response)
                updateTable(driverList)
            }
        });
    })

}

$(document).ready(filterNationality)