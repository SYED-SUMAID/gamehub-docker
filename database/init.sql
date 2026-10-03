DROP TABLE IF EXISTS games;

CREATE TABLE games (
    id SERIAL PRIMARY KEY,
    title VARCHAR(120) NOT NULL,
    description TEXT NOT NULL,
    genre VARCHAR(50) NOT NULL,
    platform VARCHAR(50) NOT NULL,
    release_year INT NOT NULL,
    rating DECIMAL(3,1) NOT NULL CHECK (rating >= 0 AND rating <= 10),
    image_url TEXT NOT NULL,
    featured BOOLEAN DEFAULT FALSE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO games
(title, description, genre, platform, release_year, rating, image_url, featured)
VALUES

(
    'Cyberpunk 2077',
    'An open-world action RPG set in Night City, a futuristic metropolis filled with corporations, gangs and cybernetic technology.',
    'RPG',
    'PC',
    2020,
    9.2,
    'https://cdn.cloudflare.steamstatic.com/steam/apps/1091500/library_600x900_2x.jpg',
    TRUE
),

(
    'Red Dead Redemption 2',
    'Follow Arthur Morgan and the Van der Linde gang across the American frontier in an enormous open-world western adventure.',
    'Adventure',
    'PC',
    2018,
    9.8,
    'https://cdn.cloudflare.steamstatic.com/steam/apps/1174180/library_600x900_2x.jpg',
    TRUE
),

(
    'God of War',
    'Kratos and Atreus journey through the dangerous world of Norse mythology while confronting gods, monsters and their own past.',
    'Action',
    'PC',
    2018,
    9.6,
    'https://cdn.cloudflare.steamstatic.com/steam/apps/1593500/library_600x900_2x.jpg',
    TRUE
),

(
    'ELDEN RING',
    'Explore the vast Lands Between in an action RPG filled with powerful enemies, mysterious locations and challenging combat.',
    'RPG',
    'PC',
    2022,
    9.7,
    'https://cdn.cloudflare.steamstatic.com/steam/apps/1245620/library_600x900_2x.jpg',
    TRUE
),

(
    'The Witcher 3',
    'Become Geralt of Rivia, a professional monster hunter searching for Ciri across a massive fantasy world.',
    'RPG',
    'PC',
    2015,
    9.7,
    'https://cdn.cloudflare.steamstatic.com/steam/apps/292030/library_600x900_2x.jpg',
    FALSE
),

(
    'Grand Theft Auto V',
    'Explore Los Santos through three criminals whose lives collide in a series of dangerous heists.',
    'Action',
    'PC',
    2015,
    9.4,
    'https://cdn.cloudflare.steamstatic.com/steam/apps/271590/library_600x900_2x.jpg',
    FALSE
),

(
    'Apex Legends',
    'A competitive battle royale shooter where legendary characters fight for survival in squads.',
    'FPS',
    'PC',
    2019,
    8.8,
    'https://cdn.cloudflare.steamstatic.com/steam/apps/1172470/library_600x900_2x.jpg',
    FALSE
),

(
    'Counter-Strike 2',
    'A tactical competitive shooter where teamwork, strategy and precision determine victory.',
    'FPS',
    'PC',
    2023,
    8.9,
    'https://cdn.cloudflare.steamstatic.com/steam/apps/730/library_600x900_2x.jpg',
    FALSE
),

(
    'Hogwarts Legacy',
    'Experience life as a student at Hogwarts while exploring the wizarding world and uncovering an ancient secret.',
    'Adventure',
    'PC',
    2023,
    8.8,
    'https://cdn.cloudflare.steamstatic.com/steam/apps/990080/library_600x900_2x.jpg',
    FALSE
),

(
    'Baldur''s Gate 3',
    'Gather your party and explore a massive fantasy RPG filled with branching choices and unforgettable characters.',
    'RPG',
    'PC',
    2023,
    9.9,
    'https://cdn.cloudflare.steamstatic.com/steam/apps/1086940/library_600x900_2x.jpg',
    FALSE
),

(
    'Horizon Zero Dawn',
    'Hunt machines and uncover the secrets of a post-apocalyptic world inhabited by robotic creatures.',
    'Action',
    'PC',
    2020,
    9.1,
    'https://cdn.cloudflare.steamstatic.com/steam/apps/1151640/library_600x900_2x.jpg',
    FALSE
),

(
    'Sekiro: Shadows Die Twice',
    'Master precise sword combat as a shinobi seeking revenge in a dark interpretation of Sengoku-era Japan.',
    'Action',
    'PC',
    2019,
    9.5,
    'https://cdn.cloudflare.steamstatic.com/steam/apps/814380/library_600x900_2x.jpg',
    FALSE
),

(
    'DOOM Eternal',
    'Rip and tear through demons in a fast-paced first-person shooter built around aggressive combat.',
    'FPS',
    'PC',
    2020,
    9.3,
    'https://cdn.cloudflare.steamstatic.com/steam/apps/782330/library_600x900_2x.jpg',
    FALSE
),

(
    'Resident Evil 4',
    'Leon Kennedy travels to a remote European village on a mission that quickly becomes a fight for survival.',
    'Horror',
    'PC',
    2023,
    9.4,
    'https://cdn.cloudflare.steamstatic.com/steam/apps/2050650/library_600x900_2x.jpg',
    FALSE
),

(
    'Black Myth: Wukong',
    'Embark on a mythological action RPG inspired by the legendary Journey to the West.',
    'Action',
    'PC',
    2024,
    9.1,
    'https://cdn.cloudflare.steamstatic.com/steam/apps/2358720/library_600x900_2x.jpg',
    FALSE
),

(
    'Helldivers 2',
    'Join the fight for Super Earth in a cooperative third-person shooter filled with chaotic battles.',
    'Shooter',
    'PC',
    2024,
    8.7,
    'https://cdn.cloudflare.steamstatic.com/steam/apps/553850/library_600x900_2x.jpg',
    FALSE
),

(
    'Dying Light 2',
    'Survive in a city overrun by infected while parkouring through rooftops and making difficult choices.',
    'Action',
    'PC',
    2022,
    8.4,
    'https://cdn.cloudflare.steamstatic.com/steam/apps/534380/library_600x900_2x.jpg',
    FALSE
),

(
    'Valorant',
    'A competitive 5v5 tactical shooter combining precise gunplay with unique agent abilities.',
    'FPS',
    'PC',
    2020,
    8.9,
    'https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt5c5a5c7b8a9a5f6e/valorant-game-overview.jpg',
    FALSE
),

(
    'Minecraft',
    'Build, explore and survive in an almost limitless block-based world where creativity drives the experience.',
    'Sandbox',
    'PC',
    2011,
    9.5,
    'https://upload.wikimedia.org/wikipedia/en/5/51/Minecraft_cover.png',
    FALSE
),

(
    'Fortnite',
    'Drop into a constantly evolving battle royale experience featuring building, combat and seasonal events.',
    'Battle Royale',
    'PC',
    2017,
    8.6,
    'https://cdn2.unrealengine.com/fortnite-og-image-1920x1080-1920x1080-6c3f3e6e6e6e.jpg',
    FALSE
);
