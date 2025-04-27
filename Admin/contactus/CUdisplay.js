
//form validation

function validateForm() {
    // Access form values
    var fullName = document.forms["myForm"]["name"].value.trim();
    var email = document.forms["myForm"]["email"].value.trim();
    var mobile = document.forms["myForm"]["mobile"].value.trim();
    var message = document.forms["myForm"]["message"].value.trim();

    if (fullName === "") {
        alert("Please enter your full name.");
        return false; // Prevent form submission
    }

    var emailPattern = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/;
    if (email === "") {
        alert("Please enter your email.");
        return false;
    } else if (!email.match(emailPattern)) {
        alert("Please enter a valid email address.");
        return false;
    }

    var mobilePattern = /^[0-9]{10}$/;
    if (mobile === "") {
        alert("Please enter your mobile number.");
        return false;
    } else if (!mobile.match(mobilePattern)) {
        alert("Please enter a valid 10-digit mobile number.");
        return false;
    }

    if (message === "") {
        alert("Please enter your message.");
        return false;
    }
    return true;
}


function myfunction() {
    if (validateForm()) {
        alert("Update successfully");
    }
}

function displaydelete() {
    alert("Delete successfully");
} 
