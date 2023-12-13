<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/x-icon" href="img/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="index.css">
    <title>Optimal Coding</title>
</head>
<body>
    <nav>
        <div class="navbar">
            <div class="logo-container">
                <img src="img/logo.png" id="logo">
                <i class="fa-solid fa-caret-down" style="color: #ffffff;"></i>
            </div>
            <ul class="nav_links">
                <li><a href="#">creators</a></li>
                <li><a href="#">discover</a></li>
                <li><a href="#">news</a></li>
            </ul>
            <div class="buttons-container">
                <button id="btn" onclick="alert('Optimal Coding got added to your browser (just for show)')">download</button>
                <div id="setting" onclick="settingAnimation()"><i class="fa-solid fa-gear" style="color: #ffffff;"></i></div>
            </div>
        </div>
    </nav>
    <main>

    </main>
    <footer>
        <div class="footer-container">
            <p>about us</p>
            <p>&copy; 2023 Optimal Coding.</p>
            <div class="social-icons">
                <a href="#"><i class="fa-brands fa-facebook" style="color: #ffffff;"></i></a>
                <a href="#"><i class="fa-brands fa-x-twitter" style="color: #ffffff;"></i></a>
                <a href="#"><i class="fa-brands fa-instagram" style="color: #ffffff;"></i></a>
            </div>
        </div>
    </footer>
    <div id="settings-dropdown">
        <label for="color-mode">Choose color mode:</label>
        <div class="toggle-container">
            <input type="checkbox" id="color-mode-toggle" onchange="changeColorMode()">
            <label for="color-mode-toggle">
                <i class="fa-regular fa-toggle-on" style="color: #000000;"></i>
                <i class="fa-regular fa-toggle-off" style="color: #000000;"></i>
            </label>
        </div>
    </div>
<?php






?>
<script>
    function settingAnimation() {
        var settingElement = document.getElementById("setting");
        settingElement.innerHTML = '<i class="fa-solid fa-gear fa-shake" style="color: #ffffff;"></i>';
        setTimeout(function () {
            settingElement.innerHTML = '<i class="fa-solid fa-gear" style="color: #ffffff;"></i>';
            toggleSettings(); // Call toggleSettings to open the dropdown
        }, 250);
    }
    
    function toggleSettings() {
        var settingsDropdown = document.getElementById("settings-dropdown");
        settingsDropdown.classList.toggle("show");
    }
    
    function changeColorMode() {
        var colorModeToggle = document.getElementById("color-mode-toggle");
        var colorMode = colorModeToggle.checked ? "dark" : "light";
    
        document.body.style.backgroundColor = (colorMode === "dark") ? "#131313" : "#fff";
        document.querySelector(".navbar").style.backgroundColor = (colorMode === "dark") ? "#191919" : "#131313";
        document.querySelector("footer").style.backgroundColor = (colorMode === "dark") ? "#191919" : "#131313";
    }
</script>
</body>
</html>