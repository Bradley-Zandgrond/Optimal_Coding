<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="./stylegame.css">
    <title>Aim Forge</title>
</head>
<body>
    <main>
        <div class="Menu">
            <div class="play">Play</div>
            <div class="challenges">Challenges</div>
            <div class="settings">Settings</div>
            <div class="extra">Extra</div>
        </div>
        <div class="gameContainer">
            <div id="game">
                <div id="target" onclick="hitTarget()"></div>
                <div id="score" class="bottom">Score: 0</div>
                <div id="accuracy" class="bottom">Accuracy: 100%</div>
                <div id="misses" class="bottom">Misses: 0</div>
            </div>
            <button onclick="toggleFullScreen()" style="border: none;"><i class="fa-solid fa-compress"></i></button>
        </div>
        <script src="./scriptgame.js"></script>
    </main>
</body>
</html>
