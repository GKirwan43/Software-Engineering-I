function checkForm() {
    removeErrors();

    let success = true;

    let shoesQuanity = document.forms["shoppingForm"]["shoes_quanity"].value;
    let computerQuanity = document.forms["shoppingForm"]["computer_quanity"].value;
    let chairQuanity = document.forms["shoppingForm"]["chair_quanity"].value;
    let username = document.forms["shoppingForm"]["username"].value;
    let password = document.forms["shoppingForm"]["password"].value;
    let shipping = document.forms["shoppingForm"]["shipping"].value;

    if (shoesQuanity == "" || computerQuanity == "" || chairQuanity == "") {
        addError("Quanities must be a valid number.")
        success = false;
    }

    if (username == "") {
        addError("Username can not be blank.")
        success = false;
    }

    if (!username.match(/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/)) {
        addError("Username must be in form name@website.com.")
        success = false;
    }

    if (password == "") {
        addError("Password can not be blank.")
        success = false;
    }

    if (!shipping) {
        addError("Must choose a shipping method.")
        success = false; 
    }

    if (!success) {
        return false;
    }
}

function addError(message) {
    let error = document.createElement("p");
    error.innerHTML=message;
    error.style.color="red";

    document.getElementById("errors").append(error);
}

function removeErrors() {
    errors = document.getElementById("errors").innerHTML = '';
}