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
    <link rel="stylesheet" href="./stylesheetssearch.css">
    <title>Discover</title>
</head>
<body>
<?php
    include ("./include/nav.php");
?>
<main>
    <div class="discoverContainer">
        <div class="search-box">
            <div class="row">
                <input type="text" id="input-box" placeholder="Search">
                <button onclick="searchRedirect()"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
            <div class="result-box"></div>
        </div>
        <div class="search-thumbnail">
            <img src="./img/AimForge.png" class="Bthumb" onclick="redirectToAimForgePage()">
            <!-- ... (other images) ... -->
        </div>
    </div>
    <script src="./autocomplete.js"></script>
</main>
<?php
    include ("./include/footer.php");
?>
<script>
    // JavaScript function to redirect to aimforgepage
    function redirectToAimForgePage() {
        window.location.href = 'aimforgepage.php';
    }
</script>
</body>
</html>