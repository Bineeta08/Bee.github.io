function check_sign_in_pass() {
    var x = document.getElementById("p-sign-in");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}

function check_sign_up_pass(){
    var x = document.getElementById("p-sign-up");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}