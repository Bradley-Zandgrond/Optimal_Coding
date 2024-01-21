/* Auteur: Bradley Zandgrond */

function performSearch() {
    // Get the search input value
    var searchInput = document.getElementById("searchInput").value;

    // Perform the search (you can replace this with your own search logic)
    var searchResults = gameSearchFunction(searchInput);

    // Display the search results
    displaySearchResults(searchResults);
}

// Example of a game search function (replace with your own logic)
function gameSearchFunction(query) {
    // This is just an example, replace it with your actual search logic
    var gameData = ["Result 1", "Result 2", "Result 3"];
    return gameData.filter(result => result.toLowerCase().includes(query.toLowerCase()));
}

function displaySearchResults(results) {
    var searchResultsContainer = document.getElementById("searchResults");

    // Clear previous results
    searchResultsContainer.innerHTML = "";

    // Display new results
    results.forEach(result => {
        var resultElement = document.createElement("div");
        resultElement.textContent = result;
        searchResultsContainer.appendChild(resultElement);
    });
}