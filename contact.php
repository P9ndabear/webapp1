<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="css/contact.css" />

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
</head>
<?php include "includes/header.php" ?>

<body>
    <div class="container">
        <div class="info-container">
            <p class="info-header">Contactgegevens</p>
            <img class="icon" src="images/gps-icon.jpg" alt="icon" />
            <div class="info-text">
                <p>Van Rosenburgweg 2A</p>
                <p>6537 TM Nijmegen</p>
            </div>
            <img class="icon" src="images/phone-icon.png" alt="icon" />
            <div class="info-text">
                <p>739 261 4580</p>
            </div>
            <img class="icon" src="images/email-icon.jpg" alt="icon" />
            <div class="info-text">
                <p>info@Timotej-Žana.nl</p>
            </div>
        </div>
        <div>
            <form>
                <div class="form">
                    <p class="form-text">Vragen of opmerkingen?</p>
                    <div class="container-email-post">
                        <label for="email"></label>
                        <input class="form-box" type="email" id="email" name="email" placeholder="Email" />
                    </div>
                    <label for="name" Your name></label>
                    <input class="form-box" type="name" id="name" name="name" placeholder="Naam" />
                    <label for="name" Your name></label>
                    <input class="form-message" type="message" id="message" name="message" placeholder="Bericht" />
                    <input class="send" style="color: black;" value="Send" type="submit" />
                </div>
            </form>
        </div>
    </div>
</body>
<?php include "includes/footer.php" ?>

</html>