<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Skills</title>
  <link rel="stylesheet" href="../src/css/style_template.css">
  <link rel="stylesheet" href="../src/css/style_skills.css">

  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Poppins:wght@200&display=swap" rel="stylesheet">

</head>
<body onload="move1()";>
    

<div class="container">

    <div class="fixe">

        <!--Intégration du menu-->        
        <?php include("header.php"); ?>

        <div class="image-bg"> 
        <img src="../medias/johnwickgun.jpg" alt=""/>
        </div>

    </div>

    <div class="contenu">

        <!--Insérer votre code juste ici pour respecter la mise en page-->

        <div class = "title">
        <h3 class="title">Assassination's Skills</h3>
    </div>
        <h4>My prices:</h4>
        <div class="prices">
            <div class="bloc1">Murder:
                <p>10.000$</p>
                <p></p> 
            </div>
            <div class="bloc2">Assassination:
                <p>25.000$</p>
            </div>
            <div class="bloc3">Multiple Murders:
                <p>from 100.000$</p>
            </div>
            <div class="bloc-element1">
                <p> All of my services includes deletion of evidences, so your involvement can never be discover.
                    Don't hesitate to send me your most imaginative requests. </p>
                <p> Everything's got a price... </p>
            </div>
        </div>
            
        <div class="JohnWickSkills">
              <div class="bloc4" id="progress">
              <p>Martial Arts</p>
              <div class="skills martialArts" id="bar1">95%</div>
              </div>
                
              <div class="bloc5" id="progress">
              <p>Weapons</p>
              <div class="skills weapons" id="bar2">97%</div>
              </div>
                
              <div class="bloc6" id="progress">
              <p>Cold Steel</p>
              <div class="skills coldSteel" id="bar3">94%</div>
              </div>

              <div class="bloc7" id="progress">
              <p>Tactical Driving</p>
              <div class="skills tacticDriving" id="bar4">86%</div>
              </div>
                
              <div class="bloc8" id="progress">
              <p>Infiltration</p>
              <div class="skills infiltration" id="bar5">91%</div>
              </div>
                
              <div class="bloc9" id="progress">
              <p>Evasion</p>  
              <div class="skills evasion" id="bar6">88%</div>
              </div>
        </div>
        <h4> More infos:</h4>
    <div class ="infos">
        <p> I'm especially know for my concentration and my determination. Give me a target and you can be sure I'll never stop tracking her until she had two bullets in the head. 
        I've mastered all types of weapons, both handguns and precision weapons.
        Able to kill with a pen, my talent is no longer to be questioned. </p>
        </div>       

        <!--Ne pas changer ce qui suit-->

    <div>

</div>
</body>
<script src="./script.js"></script>
</html>