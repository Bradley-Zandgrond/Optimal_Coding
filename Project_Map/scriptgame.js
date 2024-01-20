let score = 0;

function toggleFullScreen() {
    const gameContainer = document.getElementById("game-container");
    if (!document.fullscreenElement) {
        gameContainer.requestFullscreen().catch(err => {
            console.error(`Error attempting to enable fullscreen: ${err.message}`);
        });
    } else {
        document.exitFullscreen();
    }
}

// When target gets hit Score: +1 activate function updateScore and randomizeTarget
function hitTarget() {
    score++;
    updateScore();
    radomizeTarget();
}


// update the score per hit
function updateScore() {
    document.getElementById("score").innerHTML = `Score: ${score}`; 
}

// randomize the target
function randomizeTarget() {
    const game = document.getElementById("game");
    const target = document.getElementById("target");

    const maxX = game.clientWidth - target.clientWidth;
    const maxY = game.clientHeight - target.clientHeight;

    const randomX = math.floor(Math.random() * maxX);
    const randomY = math.floor(Math.random() * maxY);

    target.style.left = `${randomX}px`;
    target.style.top = `${randomY}px`;
}

// setup
updateScore();
moveTarget();