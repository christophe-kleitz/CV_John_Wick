<div class="menu">

<header>
        <div class="logo">
              <a href="index.php"><img src="images/logo.png" alt="Logo officiel de John Wick"/></a>
         </div>
        <nav>

            <div class="marge-before"></div>
            <ul>
                <li <?php if ($nav_en_cours == 'experience') {echo ' id="en-cours"';} ?>><a href=experience.php>Professional experience</a></li>
                <li <?php if ($nav_en_cours == 'formation') {echo ' id="en-cours"';} ?>><a href=formation.php>Formation</a></li>
                <li <?php if ($nav_en_cours == 'skills') {echo ' id="en-cours"';} ?>><a href=skills.php>Skills</a></li>
                <li <?php if ($nav_en_cours == 'hobbies') {echo ' id="en-cours"';} ?>><a href=hobbies.php>Hobbies</a></li>
                <li <?php if ($nav_en_cours == 'contact') {echo ' id="en-cours"';} ?>><a href=contact.php>Contact</a></li>
            </ul>
        </nav>
</header>
<div class="marge-before"></div>

<footer>
    <a href="#"><i class="fab fa-instagram fa-2x"></i></a>
    <a href="#"><i class="fab fa-facebook fa-2x"></i></a>
    <a href="#"><i class="fab fa-twitter fa-2x"></i></a>
</footer>

</div>

