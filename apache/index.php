<?php

$host = "postgres";
$port = "5432";
$dbname = getenv("POSTGRES_DB");
$user = getenv("POSTGRES_USER");
$password = getenv("POSTGRES_PASSWORD");

try {
    $pdo = new PDO(
        "pgsql:host=$host;port=$port;dbname=$dbname",
        $user,
        $password,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]
    );
} catch (PDOException $e) {
    die("Database connection failed.");
}

$search = $_GET['search'] ?? '';
$genre = $_GET['genre'] ?? '';

$sql = "SELECT * FROM games WHERE 1=1";
$params = [];

if ($search !== '') {
    $sql .= " AND (
        LOWER(title) LIKE LOWER(:search)
        OR LOWER(description) LIKE LOWER(:search)
    )";

    $params['search'] = "%$search%";
}

if ($genre !== '' && $genre !== 'All') {
    $sql .= " AND genre = :genre";
    $params['genre'] = $genre;
}

$sql .= " ORDER BY rating DESC";

$stmt = $pdo->prepare($sql);
$stmt->execute($params);

$games = $stmt->fetchAll();

$featuredStmt = $pdo->query(
    "SELECT * FROM games
     WHERE featured = TRUE
     ORDER BY rating DESC
     LIMIT 1"
);

$featured = $featuredStmt->fetch();

$genresStmt = $pdo->query(
    "SELECT DISTINCT genre
     FROM games
     ORDER BY genre"
);

$genres = $genresStmt->fetchAll();

$totalGames = $pdo->query(
    "SELECT COUNT(*) FROM games"
)->fetchColumn();

$averageRating = $pdo->query(
    "SELECT ROUND(AVG(rating), 1) FROM games"
)->fetchColumn();

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>GameHub — Discover Your Next Game</title>

    <link
        rel="stylesheet"
        href="assets/css/style.css"
    >

</head>

<body>

<header class="navbar">

    <div class="logo">
        <span class="logo-mark">G</span>
        <span>GameHub</span>
    </div>

    <nav>
        <a href="#home">Home</a>
        <a href="#games">Games</a>
        <a href="#genres">Genres</a>
        <a href="#about">About</a>
    </nav>

    <button
        class="nav-button"
        onclick="scrollToGames()"
    >
        Explore Games
    </button>

</header>


<main>

<section
    class="hero"
    id="home"
    style="background-image:
        linear-gradient(
            90deg,
            rgba(5,7,13,0.98) 0%,
            rgba(5,7,13,0.88) 45%,
            rgba(5,7,13,0.25) 100%
        ),
        url('<?=
            htmlspecialchars(
                $featured['image_url'] ?? ''
            )
        ?>');"
>

    <div class="hero-content">

        <div class="hero-label">
            FEATURED GAME
        </div>

        <h1>
            <?= htmlspecialchars($featured['title'] ?? 'GameHub') ?>
        </h1>

        <p>
            <?= htmlspecialchars($featured['description'] ?? '') ?>
        </p>

        <div class="hero-meta">

            <span>
                ★ <?= htmlspecialchars($featured['rating'] ?? '0') ?>
            </span>

            <span>
                <?= htmlspecialchars($featured['genre'] ?? '') ?>
            </span>

            <span>
                <?= htmlspecialchars($featured['platform'] ?? '') ?>
            </span>

            <span>
                <?= htmlspecialchars($featured['release_year'] ?? '') ?>
            </span>

        </div>

        <button
            class="primary-button"
            onclick="scrollToGames()"
        >
            Browse Library
        </button>

    </div>

</section>


<section class="stats">

    <div class="stat">
        <strong><?= $totalGames ?></strong>
        <span>Games</span>
    </div>

    <div class="stat">
        <strong><?= $averageRating ?></strong>
        <span>Average Rating</span>
    </div>

    <div class="stat">
        <strong><?= count($genres) ?></strong>
        <span>Genres</span>
    </div>

    <div class="stat">
        <strong>PC</strong>
        <span>Platform</span>
    </div>

</section>


<section
    class="games-section"
    id="games"
>

    <div class="section-header">

        <div>
            <div class="section-label">
                GAME LIBRARY
            </div>

            <h2>
                Discover your next adventure
            </h2>
        </div>

        <form
            method="GET"
            class="search-box"
        >

            <input
                type="text"
                name="search"
                placeholder="Search games..."
                value="<?= htmlspecialchars($search) ?>"
            >

            <button type="submit">
                Search
            </button>

        </form>

    </div>


    <div
        class="filters"
        id="genres"
    >

        <a
            href="index.php"
            class="<?= $genre === '' ? 'active' : '' ?>"
        >
            All
        </a>

        <?php foreach ($genres as $item): ?>

            <a
                href="?genre=<?= urlencode($item['genre']) ?>"
                class="<?= $genre === $item['genre'] ? 'active' : '' ?>"
            >
                <?= htmlspecialchars($item['genre']) ?>
            </a>

        <?php endforeach; ?>

    </div>


    <div class="game-grid">

        <?php if (count($games) > 0): ?>

            <?php foreach ($games as $game): ?>

                <article
                    class="game-card"
                    data-title="<?= strtolower(
                        htmlspecialchars($game['title'])
                    ) ?>"
                >

                    <div class="image-wrapper">

                        <img
                            src="<?= htmlspecialchars($game['image_url']) ?>"
                            alt="<?= htmlspecialchars($game['title']) ?>"
                            loading="lazy"
                            onerror="imageFallback(this)"
                        >

                        <div class="rating">
                            ★ <?= htmlspecialchars($game['rating']) ?>
                        </div>

                        <button
                            class="favorite"
                            onclick="toggleFavorite(
                                this,
                                <?= (int)$game['id'] ?>
                            )"
                            aria-label="Add to favorites"
                        >
                            ♡
                        </button>

                    </div>


                    <div class="card-content">

                        <div class="card-top">

                            <span class="genre">
                                <?= htmlspecialchars($game['genre']) ?>
                            </span>

                            <span class="year">
                                <?= htmlspecialchars($game['release_year']) ?>
                            </span>

                        </div>

                        <h3>
                            <?= htmlspecialchars($game['title']) ?>
                        </h3>

                        <p>
                            <?= htmlspecialchars($game['description']) ?>
                        </p>

                        <div class="card-footer">

                            <span>
                                <?= htmlspecialchars($game['platform']) ?>
                            </span>

                            <button
                                onclick='showGame(
                                    <?= json_encode($game) ?>
                                )'
                            >
                                Details →
                            </button>

                        </div>

                    </div>

                </article>

            <?php endforeach; ?>

        <?php else: ?>

            <div class="empty">
                No games found.
            </div>

        <?php endif; ?>

    </div>

</section>


<section
    class="about"
    id="about"
>

    <div class="about-content">

        <div class="section-label">
            ABOUT GAMEHUB
        </div>

        <h2>
            Your personal game discovery platform.
        </h2>

        <p>
            GameHub is a Dockerized game discovery application
            built with Apache, PHP and PostgreSQL.
            Browse games, search the library, filter by genre
            and save your favorites.
        </p>

    </div>

</section>

</main>


<div
    class="modal"
    id="gameModal"
>

    <div class="modal-content">

        <button
            class="modal-close"
            onclick="closeModal()"
        >
            ×
        </button>

        <img
            id="modalImage"
            src=""
            alt=""
        >

        <div class="modal-body">

            <span
                class="genre"
                id="modalGenre"
            ></span>

            <h2 id="modalTitle"></h2>

            <p id="modalDescription"></p>

            <div class="modal-meta">

                <span id="modalRating"></span>

                <span id="modalYear"></span>

                <span id="modalPlatform"></span>

            </div>

        </div>

    </div>

</div>


<footer>

    <div>
        <strong>GameHub</strong>
        <span>Dockerized Game Discovery Platform</span>
    </div>

    <span>
        Built with PHP · PostgreSQL · Apache · Docker
    </span>

</footer>


<script src="assets/js/app.js"></script>

</body>

</html>
