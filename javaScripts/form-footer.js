document.addEventListener("DOMContentLoaded", () => {
    emailjs.init("_3nIO7O_VxFLu9kpQ"); // Remplacez par votre API Key

    const emailForm = document.getElementById("contact-form");
    const emailInput = document.getElementById("email-input");

    emailForm.addEventListener("submit", (e) => {
        e.preventDefault();

        const userEmail = emailInput.value;

        if (userEmail.trim() === "") {
            alert("Veuillez entrer votre email");
            return;
        }

      
        const templateParams = {
            to_user: "Adresse de destination",
            from_email: userEmail,
            message: "Contenu du message"
        };

        emailjs.send("service_xnl4fhh", "template_ja6hwem", templateParams)
            .then(() => {
                alert("Your message has been sent successfully!");
                emailForm.reset();
            })
            .catch((error) => {
                alert("An error occurred while sending the message: " + error);
            });
    });
});
