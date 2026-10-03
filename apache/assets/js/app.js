function scrollToGames() {
    document
        .getElementById("games")
        .scrollIntoView({
            behavior: "smooth"
        });
}


function imageFallback(image) {

    image.onerror = null;

    image.src =
        "https://images.unsplash.com/" +
        "photo-1511512578047-dfb367046420" +
        "?auto=format&fit=crop&w=900&q=80";
}


function toggleFavorite(button, gameId) {

    let favorites =
        JSON.parse(
            localStorage.getItem("gamehubFavorites") || "[]"
        );

    if (favorites.includes(gameId)) {

        favorites =
            favorites.filter(
                id => id !== gameId
            );

        button.classList.remove("active");

        button.textContent = "♡";

    } else {

        favorites.push(gameId);

        button.classList.add("active");

        button.textContent = "♥";
    }

    localStorage.setItem(
        "gamehubFavorites",
        JSON.stringify(favorites)
    );
}


function loadFavorites() {

    const favorites =
        JSON.parse(
            localStorage.getItem("gamehubFavorites") || "[]"
        );

    document
        .querySelectorAll(".favorite")
        .forEach(button => {

            const onclick =
                button.getAttribute("onclick");

            if (!onclick) {
                return;
            }

            const match =
                onclick.match(/,\s*(\d+)\s*\)/);

            if (!match) {
                return;
            }

            const gameId =
                Number(match[1]);

            if (favorites.includes(gameId)) {

                button.classList.add("active");

                button.textContent = "♥";
            }
        });
}


function showGame(game) {

    document.getElementById(
        "modalImage"
    ).src = game.image_url;

    document.getElementById(
        "modalImage"
    ).alt = game.title;

    document.getElementById(
        "modalTitle"
    ).textContent = game.title;

    document.getElementById(
        "modalDescription"
    ).textContent = game.description;

    document.getElementById(
        "modalGenre"
    ).textContent = game.genre;

    document.getElementById(
        "modalRating"
    ).textContent =
        "★ " + game.rating;

    document.getElementById(
        "modalYear"
    ).textContent =
        game.release_year;

    document.getElementById(
        "modalPlatform"
    ).textContent =
        game.platform;

    document
        .getElementById("gameModal")
        .classList.add("show");

    document.body.style.overflow = "hidden";
}


function closeModal() {

    document
        .getElementById("gameModal")
        .classList.remove("show");

    document.body.style.overflow = "";
}


document
    .getElementById("gameModal")
    .addEventListener(
        "click",
        function(event) {

            if (
                event.target === this
            ) {
                closeModal();
            }

        }
    );


document.addEventListener(
    "keydown",
    function(event) {

        if (event.key === "Escape") {
            closeModal();
        }

    }
);


document.addEventListener(
    "DOMContentLoaded",
    loadFavorites
);
