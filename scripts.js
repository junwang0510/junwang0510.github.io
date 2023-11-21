function showEmail() {
    var emailDiv = document.getElementById("email-display");
    if (emailDiv.childNodes.length === 0) {
        var emailText = document.createTextNode("Email: junw3 [AT] cs.washington.edu");
        emailDiv.appendChild(emailText);
    }
    emailDiv.classList.toggle("visible");
}