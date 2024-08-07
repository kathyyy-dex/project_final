const form = document.querySelector('form');

function sendEmail() {
    Email.send({
        Host: "smtp.elasticemail.com",
        Username: "kathlyn.guivencan1104@gmail.com",
        Password: "D8B633CF555CEAEB297A4F89097F0D2CBA61", // Use your App Password here
        To: 'kathlyn.guivencan1104@gmail.com',
        From: email,
        Subject: number,
        Body: body,
        TLS: true // Add this option for secure connection
    }).then(
        message => alert(message)
        console.log("Message sent successfully!");
    );
}
