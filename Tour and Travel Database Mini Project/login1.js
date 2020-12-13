

function log() {
    var u = document.getElementById("user").value;
    var p = document.getElementById("pass").value; 

    if (u === "admin" && p === "admin") {
             location.href = "http://localhost:3000/admin.php";
        }

    else
        alert("You are not a Administrator");
}


function sign()
{
    alert("Press OK to Sign Up");
    window.location.href="signup.php";
}