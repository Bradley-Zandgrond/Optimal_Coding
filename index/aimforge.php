<!---------Auteur: Bradley Zandgrond---------->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/x-icon" href="img/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="./include/styleMenu.css">
    <link rel="stylesheet" href="stylesheets1.css">
    <title>Aim Forge</title>
</head>
<body>
<nav>
<?php
    include ("./include/nav.php");
?>
</nav>
<main>
<div class="profilecreator">
    <a href="#"><img src="img/pfpdark.jpg" class="pfp"></a>
    <p class="title">Aim Forge <br> by <span class="user-name"><a href="#">9021118</a></span></p>
</div>
<div class="game-thumbnail">
    <div class="background-thumbnail"></div>
        <a href="#">
            <div class="green-flag"><i class="fa-solid fa-flag"></i></div>
        </a>
        <img src="img/AimForge.png" class="Aim-Forge">
</div>
<p class="text1">Instructions</p>
<div class="instructions">
    <p class="padding">Click the <span class="color-flag"><i class="fa-solid fa-flag"></i></span> to start the game!</p> <br>
</div>
<p class="text2">Credits And Info</p>
<div class="creditsandinfo">
    <p class="padding"></p> <br>
</div>
<p class="date">&copy; Dec 19, 2024</p>
</main>
<footer>
<?php
    include ("./include/footer.php");
?>
</footer>
</body>
</html>