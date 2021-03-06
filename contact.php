<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Contact</title>
    <link rel="stylesheet" href="css/style_template.css">
    <link rel="stylesheet" href="css/style_contact.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/png" href="images/favicon.ico"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Poppins:wght@200&display=swap"
          rel="stylesheet">

</head>
<body>

<?php $nav_en_cours = 'contact';?>
<?php 

$errors = [];
if (isset($_SESSION['errors'])) {
    $errors = $_SESSION['errors']; 
    unset($_SESSION['errors']);
}
?>

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

        <?php $firstnameErr = $lastnameErr = $emailErr = $messageErr =""; ?>

        <div class="formulaire-contact">
            <h2> Send me a message </h2>

            <form name="form" action="verify.php" method="post">

                <span class="error"> <?php if (isset($errors['firstname'])) { echo $errors['firstname']; }; ?></span>
                <input type="text" name="firstname" id="firstname" placeholder="Your first name"/>

                <span class="error"> <?php if (isset($errors['lastname'])) { echo $errors['lastname']; }; ?></span>
                <input type="text" name="lastname" id="lastname" placeholder="Your last name"/>

                <span class="error"> <?php if (isset($errors['mail'])) { echo $errors['mail']; }; ?></span>
                <input type="email" name="mail" id="mail" placeholder="Your email"/>

                <span class="error"> <?php if (isset($errors['message'])) { echo $errors['message']; }; ?></span>
                <textarea name="message" id="message" rows="5" cols="20" placeholder="Message"></textarea>

                <button type="submit" id="submit" class="submit">Send message</button>
            </form>

        </div>

        <div>

        </div>


</body>
</html>
