function login() {
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;
    var resultDiv = document.getElementById('result');

    // Implement the login logic here
    // For demonstration purposes, let's use a simple check
    if (username === "user" && password === "password") {
        resultDiv.textContent = "Login successful!";
        resultDiv.style.color = "green";
    } else {
        resultDiv.textContent = "Invalid username or password.";
        resultDiv.style.color = "red";
    }
}
