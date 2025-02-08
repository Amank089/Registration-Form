document.getElementById("registrationForm").addEventListener("submit", function(event) {
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;
    
    // Basic Validation
    if (name === "" || email === "" || phone === "") {
        alert("All fields are required!");
        event.preventDefault(); // Stop form submission
    }
});
