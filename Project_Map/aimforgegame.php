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
            <button id="play">Play</button>
            <button id="settings"><i class="fa-solid fa-gears fa-flip-horizontal"></i>settings</button>
            <button id="extra">extra</button>
        </div>
        <div class="gameContainer">
            <button onclick="toggleFullScreen()"><i class="fa-solid fa-compress"></i></button>
            <div id="game">
                <div id="score">Score: 0</div>
                <div id="accuracy">Accuracy: 100%</div>
                <div id="target" onclick="hitTarget()"></div>
            </div>
        </div>
        <script src="./scriptgame.js"></script>
    </main>
</body>
</html>