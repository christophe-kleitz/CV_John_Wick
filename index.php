<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Contact</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Poppins:wght@200&display=swap" rel="stylesheet">

</head>
<body>

<div class="container">

    <div class="fixe">

        <!--Intégration du menu-->        
        <?php include("header.php"); ?>

        <div class="image-bg"> <!--Intégrer ici une image de bg-->
            <img src="johnbg.jpg" alt="Me and my dog"/>
        </div>

    </div>

    <div class="contenu">

        <!--Insérer votre code juste ici pour respecter la mise en page-->

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
                    <p>You will never find my phone number on a website<br>The easiest way is to use the contact form </p>
                </div>
            </div>
        
        </div>

        <div class="formulaire-contact">

            <h2> Send message </h2>

            <form>

                <input type="text" name="name" id="name" placeholder="First name"/>

                <input type="text" name="name" id="name" placeholder="Last name"/>
                    
                <input type="email" name="mail" id="mail" placeholder="Email"/>
                    
                <textarea name="message" id="message" rows="20" cols="20" placeholder="Message"></textarea>

                <button type="submit" id="submit" class="submit">Send message</button>
            </form>
        
        </div>

        <!--Ne pas supprimer ce qui suit-->

    <div>

</div>
  

</body>
</html>