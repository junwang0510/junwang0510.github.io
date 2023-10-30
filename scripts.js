function showEmail() {
    var emailDiv = document.getElementById("email-display");
    if (emailDiv.childNodes.length === 0) {
        var emailText = document.createTextNode("Email: junw3 [AT] cs.washington.edu");
        emailDiv.appendChild(emailText);
    }
    emailDiv.classList.toggle("visible");
}

function toggleTheme() {
    const body = document.body;
    if (body.classList.contains('dark-theme')) {
        body.classList.remove('dark-theme');
        body.classList.add('light-theme');
    } else {
        body.classList.remove('light-theme');
        body.classList.add('dark-theme');
    }
}
