<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Thank you</title>
    <link rel="stylesheet" href="css/style_template.css">
    <link rel="stylesheet" href="css/style_form.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Poppins:wght@200&display=swap"
          rel="stylesheet">

</head>
<body>

<div class="thanks-message">

    <div class="message">
        <h3>Thank you for sending your form <?php echo $_SESSION["firstname"]; ?> ! <br>
            I will get back to you very quickly on your email <?php echo $_SESSION["mail"]; ?> </h3>
    </div>

    <div class="redirection">
        <h4>To go to back to my CV, click on my face</h4>
        <a href="index.php"> <img src=images/redirection-jw.jpg alt="My most beautiful smile"/></a>
    </div>

</div>

</body>
</html>