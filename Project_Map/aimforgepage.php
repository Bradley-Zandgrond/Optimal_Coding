<!---------Auteur: Bradley Zandgrond---------->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="x-icon" href="./img/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="./include/styleMenu.css">
    <link rel="stylesheet" href="./stylesheets.css">
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
    <a href="./aboutmeB.php"><img src="img/pfpdark.jpg" class="pfp"></a>
    <p class="title">Aim Forge <br> by <span class="user-name">9021118</span></p>
</div>
<div class="game-thumbnail">
    <div class="background-thumbnail"></div>
        <a href="./aimforgegame.php">
            <div class="green-flag"><i class="fa-solid fa-flag"></i></div>
        </a>
        <img src="img/AimForge.png" class="Aim-Forge">
</div>
<p class="text1">Instructions</p>
<div class="instructions">
    <p class="padding">
        Click the <span class="color-flag"><i class="fa-solid fa-flag"></i></span> to start the game! <br>
        Your objective is to <span class="red font-weigth">shoot</span> the tagets that come in your way. 
        There are diffrent kinds of levels to train you aim you can also change your sens in 
        <i class="fa-solid fa-gears fa-flip-horizontal"></i><span class="font-weigth">settings</span>. 
        Be sure to enjoy while you play!
    </p>
</div>
<p class="text2">Credits And Info</p>
<div class="creditsandinfo">
    <p class="padding">
        Credits to Marlon and EpicGames for inspiration.     
        <i class="fa-solid fa-minus"></i><i class="fa-solid fa-minus"></i>
        <i class="fa-solid fa-minus"></i><i class="fa-solid fa-minus"></i>
        <i class="fa-solid fa-minus"></i><i class="fa-solid fa-minus"></i>
        <i class="fa-solid fa-minus"></i><i class="fa-solid fa-minus"></i>
        <i class="fa-solid fa-minus"></i><i class="fa-solid fa-minus"></i>
        <i class="fa-solid fa-minus"></i><i class="fa-solid fa-minus"></i>
        <i class="fa-solid fa-minus"></i><i class="fa-solid fa-minus"></i>
        <i class="fa-solid fa-minus"></i><i class="fa-solid fa-minus"></i>
        <i class="fa-solid fa-minus"></i><i class="fa-solid fa-minus"></i>
        <i class="fa-solid fa-minus"></i><i class="fa-solid fa-minus"></i>
        <i class="fa-solid fa-minus"></i><i class="fa-solid fa-minus"></i>
        <i class="fa-solid fa-minus"></i><i class="fa-solid fa-minus"></i>
        <i class="fa-solid fa-minus"></i><i class="fa-solid fa-minus"></i>
        <i class="fa-solid fa-minus"></i><i class="fa-solid fa-minus"></i>
        <i class="fa-solid fa-minus"></i> Hello my name is Bradley, I created 
        this game to improve shooter game players or games that needs high accuracy
    </p>
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