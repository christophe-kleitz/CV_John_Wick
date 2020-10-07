<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Contact</title>
    <link rel="stylesheet" href="css/style_template.css">
    <link rel="stylesheet" href="css/style_contact.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Poppins:wght@200&display=swap"
          rel="stylesheet">

</head>
<body>

<?php $nav_en_cours = 'contact'; ?>

<div class="container">

    <div class="fixe">

        <?php include("header.php"); ?>

        <div class="image-bg">
            <img src="images/contact-johnwickdog.jpg" alt="Me and my dog" class="middle"/>
        </div>

    </div>

    <div class="contenu">

        <div class="titre-contact">
            <h1> Contact me if you want</h1>
        </div>

        <div class="picto-contact">

            <div class="picto-contact-col1">
                <div class="picto">
                    <i class="fas fa-map-marker-alt fa-2x"></i>
                </div>
                <div class="text-picto">
                    <p>You can meet me at the WildCodeSchool, but I never stay long in one place </p>
                </div>

            </div>

            <div class="picto-contact-col2">
                <div class="picto">
                    <i class="fas fa-phone fa-2x"></i>
                </div>
                <div class="text-picto">
                    <p>You will never find my phone number on a website... The easiest way is to use the contact
                        form. </p>
                </div>
            </div>

        </div>

        <div class="formulaire-contact">

            <h2> Send me a message </h2>

            <form name="form" action="form.php" method="post">

                <input type="text" name="first-name" id="first-name" placeholder="Your first name"/>

                <input type="text" name="last-name" id="last-name" placeholder="Your last name"/>

                <input type="email" name="mail" id="mail" placeholder="Your email"/>

                <textarea name="message" id="message" rows="8" cols="20" placeholder="Message"></textarea>

                <button type="submit" id="submit" class="submit">Send message</button>
            </form>

        </div>

        <div>

        </div>


</body>
</html>