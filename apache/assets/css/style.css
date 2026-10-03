* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

:root {
    --bg: #070910;
    --surface: #10131d;
    --surface-light: #171b27;
    --border: rgba(255,255,255,0.08);
    --text: #f5f7fb;
    --muted: #9da4b5;
    --accent: #7c5cff;
    --accent-light: #9b83ff;
}

html {
    scroll-behavior: smooth;
}

body {
    font-family:
        Inter,
        system-ui,
        -apple-system,
        BlinkMacSystemFont,
        "Segoe UI",
        sans-serif;

    background: var(--bg);
    color: var(--text);
    line-height: 1.6;
}


/* NAVBAR */

.navbar {
    position: sticky;
    top: 0;
    z-index: 1000;

    height: 76px;

    display: flex;
    align-items: center;
    justify-content: space-between;

    padding: 0 6%;

    background: rgba(7,9,16,0.82);
    backdrop-filter: blur(18px);

    border-bottom: 1px solid var(--border);
}

.logo {
    display: flex;
    align-items: center;
    gap: 10px;

    font-size: 20px;
    font-weight: 800;
}

.logo-mark {
    width: 34px;
    height: 34px;

    display: grid;
    place-items: center;

    border-radius: 9px;

    background: var(--accent);

    font-weight: 900;
}

.navbar nav {
    display: flex;
    gap: 32px;
}

.navbar nav a {
    color: var(--muted);
    text-decoration: none;
    font-size: 14px;
    transition: 0.2s;
}

.navbar nav a:hover {
    color: white;
}

.nav-button,
.primary-button {
    border: 0;
    cursor: pointer;

    padding: 11px 18px;

    border-radius: 9px;

    color: white;
    background: var(--accent);

    font-weight: 700;

    transition: 0.2s;
}

.nav-button:hover,
.primary-button:hover {
    transform: translateY(-2px);
    background: var(--accent-light);
}


/* HERO */

.hero {
    min-height: 650px;

    display: flex;
    align-items: center;

    padding: 80px 8%;

    background-size: cover;
    background-position: center;
}

.hero-content {
    max-width: 680px;
}

.hero-label,
.section-label {
    color: var(--accent-light);

    font-size: 12px;
    font-weight: 800;

    letter-spacing: 2px;

    margin-bottom: 15px;
}

.hero h1 {
    font-size: clamp(48px, 7vw, 86px);
    line-height: 0.95;

    margin-bottom: 25px;
}

.hero p {
    max-width: 600px;

    color: #c0c5d1;

    font-size: 17px;

    margin-bottom: 25px;
}

.hero-meta {
    display: flex;
    gap: 12px;
    flex-wrap: wrap;

    margin-bottom: 30px;
}

.hero-meta span {
    padding: 7px 12px;

    background: rgba(255,255,255,0.08);

    border: 1px solid var(--border);

    border-radius: 7px;

    color: #dfe2eb;

    font-size: 13px;
}


/* STATS */

.stats {
    display: grid;
    grid-template-columns: repeat(4, 1fr);

    margin: 0 6%;

    transform: translateY(-40px);

    background: var(--surface);

    border: 1px solid var(--border);

    border-radius: 15px;

    overflow: hidden;
}

.stat {
    padding: 25px;
    text-align: center;

    border-right: 1px solid var(--border);
}

.stat:last-child {
    border-right: 0;
}

.stat strong {
    display: block;

    font-size: 26px;
}

.stat span {
    color: var(--muted);
    font-size: 13px;
}


/* GAMES */

.games-section {
    padding: 50px 6% 100px;
}

.section-header {
    display: flex;
    justify-content: space-between;
    align-items: end;

    gap: 30px;

    margin-bottom: 35px;
}

.section-header h2,
.about h2 {
    font-size: clamp(30px, 4vw, 48px);
    line-height: 1.1;
}

.search-box {
    display: flex;

    min-width: 320px;

    background: var(--surface);

    border: 1px solid var(--border);

    border-radius: 9px;

    overflow: hidden;
}

.search-box input {
    width: 100%;

    padding: 13px 15px;

    border: 0;
    outline: 0;

    background: transparent;

    color: white;
}

.search-box button {
    border: 0;

    padding: 0 18px;

    background: var(--accent);

    color: white;

    font-weight: 700;

    cursor: pointer;
}


/* FILTERS */

.filters {
    display: flex;
    flex-wrap: wrap;

    gap: 10px;

    margin-bottom: 30px;
}

.filters a {
    padding: 8px 15px;

    color: var(--muted);

    text-decoration: none;

    border: 1px solid var(--border);

    border-radius: 30px;

    font-size: 13px;

    transition: 0.2s;
}

.filters a:hover,
.filters a.active {
    color: white;
    background: var(--accent);
    border-color: var(--accent);
}


/* GAME GRID */

.game-grid {
    display: grid;

    grid-template-columns:
        repeat(auto-fill, minmax(260px, 1fr));

    gap: 22px;
}

.game-card {
    background: var(--surface);

    border: 1px solid var(--border);

    border-radius: 14px;

    overflow: hidden;

    transition:
        transform 0.25s,
        border-color 0.25s,
        box-shadow 0.25s;
}

.game-card:hover {
    transform: translateY(-7px);

    border-color: rgba(124,92,255,0.55);

    box-shadow:
        0 20px 50px rgba(0,0,0,0.35);
}

.image-wrapper {
    position: relative;

    aspect-ratio: 2 / 3;

    overflow: hidden;

    background: #11141d;
}

.image-wrapper img {
    width: 100%;
    height: 100%;

    object-fit: cover;

    transition: transform 0.5s;
}

.game-card:hover img {
    transform: scale(1.05);
}

.rating {
    position: absolute;

    top: 12px;
    left: 12px;

    padding: 6px 9px;

    border-radius: 6px;

    background: rgba(0,0,0,0.78);

    color: #ffd76a;

    font-size: 13px;
    font-weight: 700;
}

.favorite {
    position: absolute;

    top: 12px;
    right: 12px;

    width: 38px;
    height: 38px;

    border: 0;

    border-radius: 50%;

    background: rgba(0,0,0,0.7);

    color: white;

    font-size: 21px;

    cursor: pointer;

    transition: 0.2s;
}

.favorite:hover,
.favorite.active {
    background: var(--accent);
}

.card-content {
    padding: 18px;
}

.card-top {
    display: flex;
    justify-content: space-between;

    margin-bottom: 9px;
}

.genre {
    color: var(--accent-light);

    font-size: 11px;
    font-weight: 800;

    text-transform: uppercase;

    letter-spacing: 1px;
}

.year {
    color: var(--muted);

    font-size: 12px;
}

.card-content h3 {
    font-size: 21px;

    margin-bottom: 9px;
}

.card-content p {
    color: var(--muted);

    font-size: 13px;

    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;

    overflow: hidden;

    margin-bottom: 18px;
}

.card-footer {
    display: flex;
    justify-content: space-between;
    align-items: center;

    padding-top: 14px;

    border-top: 1px solid var(--border);
}

.card-footer span {
    color: var(--muted);

    font-size: 12px;
}

.card-footer button {
    border: 0;

    background: transparent;

    color: var(--accent-light);

    font-weight: 700;

    cursor: pointer;
}


/* ABOUT */

.about {
    padding: 110px 8%;

    background:
        linear-gradient(
            135deg,
            #0d1020,
            #080a12
        );

    border-top: 1px solid var(--border);
}

.about-content {
    max-width: 700px;
}

.about p {
    margin-top: 20px;

    color: var(--muted);

    font-size: 17px;
}


/* MODAL */

.modal {
    position: fixed;

    inset: 0;

    z-index: 2000;

    display: none;
    align-items: center;
    justify-content: center;

    padding: 20px;

    background: rgba(0,0,0,0.82);

    backdrop-filter: blur(10px);
}

.modal.show {
    display: flex;
}

.modal-content {
    position: relative;

    width: min(850px, 100%);

    display: grid;
    grid-template-columns: 300px 1fr;

    overflow: hidden;

    background: var(--surface);

    border: 1px solid var(--border);

    border-radius: 18px;
}

.modal-content > img {
    width: 100%;
    height: 100%;

    object-fit: cover;

    min-height: 450px;
}

.modal-body {
    padding: 45px 35px;
}

.modal-body h2 {
    font-size: 40px;
    line-height: 1.05;

    margin: 12px 0 20px;
}

.modal-body p {
    color: var(--muted);

    margin-bottom: 25px;
}

.modal-meta {
    display: flex;
    gap: 10px;
    flex-wrap: wrap;
}

.modal-meta span {
    padding: 8px 12px;

    background: var(--surface-light);

    border: 1px solid var(--border);

    border-radius: 7px;

    font-size: 13px;
}

.modal-close {
    position: absolute;

    top: 15px;
    right: 15px;

    width: 38px;
    height: 38px;

    border: 0;

    border-radius: 50%;

    background: rgba(0,0,0,0.7);

    color: white;

    font-size: 24px;

    cursor: pointer;

    z-index: 5;
}


/* EMPTY */

.empty {
    grid-column: 1 / -1;

    padding: 80px;

    text-align: center;

    color: var(--muted);
}


/* FOOTER */

footer {
    display: flex;
    justify-content: space-between;

    gap: 30px;

    padding: 35px 6%;

    border-top: 1px solid var(--border);

    color: var(--muted);

    font-size: 13px;
}

footer div {
    display: flex;
    flex-direction: column;
}

footer strong {
    color: white;

    font-size: 17px;
}


/* RESPONSIVE */

@media (max-width: 800px) {

    .navbar {
        padding: 0 20px;
    }

    .navbar nav {
        display: none;
    }

    .hero {
        min-height: 580px;

        padding: 60px 25px;
    }

    .stats {
        grid-template-columns: repeat(2, 1fr);

        margin: -30px 20px 0;
    }

    .stat:nth-child(2) {
        border-right: 0;
    }

    .stat:nth-child(-n+2) {
        border-bottom: 1px solid var(--border);
    }

    .games-section {
        padding-left: 20px;
        padding-right: 20px;
    }

    .section-header {
        align-items: stretch;

        flex-direction: column;
    }

    .search-box {
        min-width: 0;
    }

    .modal-content {
        grid-template-columns: 1fr;

        max-height: 90vh;

        overflow-y: auto;
    }

    .modal-content > img {
        height: 300px;

        min-height: 0;
    }

    .modal-body h2 {
        font-size: 30px;
    }

    footer {
        flex-direction: column;
    }

}
