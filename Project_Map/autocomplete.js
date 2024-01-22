let availableKeywords = [
    'Aim Forge',
    'Emir Game',
    'Jason Game',
];

const resultsBox = document.querySelector(".result-box");
const inputBox = document.getElementById("input-box");

inputBox.onkeyup = function() {
    let result = [];
    let input = inputBox.value;

    if(input.length) {
        result = availableKeywords.filter((keyword)=>{
            return keyword.toLowerCase().includes(input.toLowerCase());
        });
        console.log(result);
    }
    display(result);

    if(!result.length) {
        resultsBox.innerHTML = '';
    }
}

function display(result) {
    const content = result.map((list)=>{
        return "<li onclick=selectInput(this)>" + list + "</li>";
    });

    resultsBox.innerHTML = "<ul>" + content.join('') + "</ul>";
}

function selectInput(list) {
    inputBox.value = list.innerHTML;
    resultsBox.innerHTML = '';
}

function searchRedirect() {
    let inputText = inputBox.value.trim();
    let thumbnailsContainer = document.getElementById('search-thumbnails');

    // Reset the layout before reputting them on place
    Array.from(thumbnailsContainer.children).forEach(thumbnail => {
        thumbnail.style.display = 'block';
        thumbnail.style.marginBottom = '10px';
    });

    // Create a new array to put only the thumbnails that match the keyword
    let matchingThumbnails = Array.from(thumbnailsContainer.children).filter(thumbnail => {
        return thumbnail.alt.toLowerCase().includes(inputText.toLowerCase());
    });

    // Hide all thumbnails
    Array.from(thumbnailsContainer.children).forEach(thumbnail => {
        thumbnail.style.display = 'none';
    });

    // Show only the matching thumbnails and put them in rows
    for (let i = 0; i < matchingThumbnails.length; i += 3) {
        for (let j = 0; j < 3 && i + j < matchingThumbnails.length; j++) {
            matchingThumbnails[i + j].style.display = 'inline-block';
        }
    }
}