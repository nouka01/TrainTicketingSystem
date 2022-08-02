function userNameValidation() {
    
    var usernameField = document.getElementById("u-name").value;
    var errorText;

    if (usernameField.length == 0) {
        errorText = "Username field can't be empty";
    } else if (usernameField.length < 3 || usernameField.length > 20) {
        errorText = "Username must be between 3 and 20 characters";
    } else {
        errorText = "";
    }
    document.getElementById("username-err").innerHTML = errorText;
}

function phoneNumberValidation() {
    let phoneField = document.getElementById("phone-num").value;
    let errorText;

    if (phoneField.length != 11) {
        errorText = "Phone number must be 11 characters";
    } else {
        errorText = "";
    }
    document.getElementById("phonenum-err").innerHTML = errorText;
}

function emailValidation() {
    var emailField = document.getElementById("e-mail").value;
    var errorText;
    var emailRegexFormat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

    if (emailField.match(emailRegexFormat)) {
        errorText = "";
    } else
        errorText =
            "Invalid email format. Example for email format: youssef@mail.com";
    document.getElementById("email-err").innerHTML = errorText;
}

function passwordValidation() {
    var passwordField = document.getElementById("p-word").value;
    var errorText;

    if (passwordField.length < 8) {
        errorText = "Password must be at least 8 characters";
    } else errorText = "";
    document.getElementById("pw-err").innerHTML = errorText;
}

function confirmPasswordValidation() {
    var passwordField = document.getElementById("p-word").value;
    var confPassField = document.getElementById("conf-password").value;

    var errorText;

    if (confPassField != passwordField) {
        errorText = "Passwords don't match!";
    } else errorText = "";
    document.getElementById("conf-err").innerHTML = errorText;
}

function submitEnable(){
    var usernameField = document.getElementById("u-name").value;
    var phoneField = document.getElementById("phone-num").value;
    var emailField = document.getElementById("e-mail").value;
    var passwordField = document.getElementById("p-word").value;
    var confPassField = document.getElementById("conf-password").value;
    var emailRegexFormat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var usernameCheck=false;
    var phoneCheck = false;
    var emailCheck = false;
    var pwCheck = false;
    var confPwCheck = false;
    var isValidated = false;
    //If all validations pass, enable the Sign Up button
        if(usernameField.length!=0)
            usernameCheck = true;
        if(phoneField.length == 11)
            phoneCheck = true;
        if(emailField.match(emailRegexFormat))
            emailCheck = true;
        if(passwordField.length > 8 )
            pwCheck = true;
        if(confPassField == passwordField)
            confPwCheck = true;

        
        if(usernameCheck == true && phoneCheck == true && emailCheck == true && pwCheck == true && confPwCheck == true){
            isValidated = true;
        }

        if(isValidated){
            document.querySelector('#submit-btn').disabled = false;
            document.getElementById("submit-btn").style.backgroundColor = "green";
        }

        
            
            

         
        }
         



