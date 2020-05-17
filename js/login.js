var attempt = 3; // Variable to count number of attempts.
// Below function Executes on click of login button.
function validate() {
  var username = document.getElementById("uname").value;
  var password = document.getElementById("pass").value;
  if (username == "test" && password == "test123") {
    alert("Login successfully");
    window.location = "index.html"; // Redirecting to other page.
    return false;
  } else {
    attempt--; // Decrementing by one.
    alert("You have left " + attempt + " attempt;");
    // Disabling fields after 3 attempts.
    if (attempt == 0) {
      document.getElementById("uname").disabled = true;
      document.getElementById("pass").disabled = true;
      document.getElementById("submit").disabled = true;
      return false;
    }
  }
}

// Get the input field
var input = document.getElementById("login-input");
// Execute a function when the user releases a key on the keyboard
input.addEventListener("keyup", function (event) {
  // Number 13 is the "Enter" key on the keyboard
  if (event.keyCode === 13) {
    // Cancel the default action, if needed
    event.preventDefault();
    // Trigger the button element with a click
    document.getElementById("submit").click();
  }
});
