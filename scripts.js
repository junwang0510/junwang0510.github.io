function showEmail() {
    var emailDiv = document.getElementById("email-display");
    if (emailDiv.childNodes.length === 0) {
        var emailText = document.createTextNode("Email: junwang0510 [AT] gmail [DOT] com");
        emailDiv.appendChild(emailText);
    }
    emailDiv.classList.toggle("visible");
}