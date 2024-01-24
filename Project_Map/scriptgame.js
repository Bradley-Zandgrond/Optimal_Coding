/* Auteur: Bradley Zandgrond */

let score = 0;
let hits = 0;
let misses = 0;

// When the target gets hit, Score: +1 activate function updateScore and randomizeTarget
function hitTarget() {
    hits++;
    score++;
    updateScore();
    updateAccuracy();
    randomizeTarget();
    updateMisses();
}

// Update the score per hit
function updateScore() {
    document.getElementById("score").innerHTML = `Score: ${score}`;
}

// Update the accuracy after each hit or miss
function updateAccuracy() {
    const totalShots = hits + misses;
    const accuracy = totalShots === 0 ? 100 : Math.round((hits / totalShots) * 100);
    document.getElementById("accuracy").innerHTML = `Accuracy: ${accuracy}%`;
}

// Update the misses count
function updateMisses() {
    document.getElementById("misses").innerHTML = `Misses: ${misses}`;
}

// Randomize the target position
function randomizeTarget() {
    const game = document.getElementById("game");
    const target = document.getElementById("target");

    const maxX = game.clientWidth - target.clientWidth;
    const maxY = game.clientHeight - target.clientHeight;

    const randomX = Math.floor(Math.random() * maxX);
    const randomY = Math.floor(Math.random() * maxY);

    target.style.left = `${randomX}px`;
    target.style.top = `${randomY}px`;
}

// Check if a click is a miss
document.getElementById("game").addEventListener("click", function (event) {
    const target = document.getElementById("target");
    const rect = target.getBoundingClientRect();

    const x = event.clientX;
    const y = event.clientY;

    if (x < rect.left || x >= rect.right || y < rect.top || y >= rect.bottom) {
        // Click is outside the target boundaries
        misses++;
        updateMisses();
    }
});

// Setup
updateScore();
updateAccuracy();
updateMisses();
randomizeTarget();

// togglefullscreenmode
function toggleFullScreen() {
    const gameContainer = document.getElementById("game");
    if (!document.fullscreenElement) {
        gameContainer.requestFullscreen().catch(err => {
            console.error(`Error attempting to enable fullscreen: ${err.message}`);
        });
    } else {
        document.exitFullscreen();
    }
}