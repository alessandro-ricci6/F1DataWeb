function validateForm(numb, birth) {
    splitBirth = birth.split("-")
    year = parseInt(splitBirth[0])

    if(numb >= 1 & numb <= 99 & year <= 2024 & year >= 1900) {
        return true
    }
    return false
}

//Functions to add a driver
function addDriver() {
    addBtn = document.getElementById("addDriverBtn")
    nameInput = document.getElementById("nameInput")
    surnameInput = document.getElementById("surnameInput")
    nationality = document.getElementById("nationalityInput")
    numbInput = document.getElementById("numberInput")
    birthInput = document.getElementById("birthInput")
    addBtn.addEventListener("click", function(){
        if(validateForm(numbInput.value, birthInput.value)){
            $.ajax({
                type: "POST",
                url: "functions/driver.php",
                data: {
                    action: 'add',
                    name: nameInput.value,
                    surname: surnameInput.value,
                    nationality: nationality.value,
                    number: numbInput.value,
                    birth: birthInput.value,
                }
            });
        } else {
            alert("Error")
        }
    })
}

$(document).ready(addDriver)