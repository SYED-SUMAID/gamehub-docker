# GameHub

A containerized game discovery platform built with **Apache, PHP, PostgreSQL, and Docker Compose**.

## Overview

| Component | Purpose |
|---|---|
| Apache | Web server |
| PHP | Application logic and UI |
| PostgreSQL | Game database |
| Docker | Containerization |
| Docker Compose | Multi-container orchestration |
| Bind Mount | Development file synchronization |
| Named Volume | Persistent PostgreSQL data |
| Custom Network | Container-to-container communication |
| `.env` | Environment configuration |

## Architecture

    Browser
       │
       │ :8097
       ▼
    Apache + PHP
       │
       │ gamehub-network
       ▼
    PostgreSQL
       │
       ▼
    gamehub_data

    Host
       │
       ├── apache/ ────────► /var/www/html
       │      Bind Mount
       │
       └── database/init.sql
              │
              ▼
        PostgreSQL initialization

## Project Structure

    gamehub-docker/
    ├── apache/
    │   ├── Dockerfile
    │   ├── index.php
    │   └── assets/
    │       ├── css/
    │       │   └── style.css
    │       └── js/
    │           └── app.js
    ├── database/
    │   └── init.sql
    ├── .env
    ├── .gitignore
    └── docker-compose.yml

## Setup

### 1. Clone the repository

    git clone <repository-url>
    cd gamehub-docker

### 2. Configure environment variables

Create `.env`:

    POSTGRES_DB=gamehub
    POSTGRES_USER=gamehub_user
    POSTGRES_PASSWORD=gamehub_password

Never commit `.env` to Git.

### 3. Start the application

    docker compose up -d --build

### 4. Check containers

    docker compose ps

### 5. Open GameHub

    http://localhost:8097

## Useful Commands

| Command | Purpose |
|---|---|
| `docker compose up -d --build` | Build and start containers |
| `docker compose down` | Stop and remove containers |
| `docker compose down -v` | Remove containers and database volume |
| `docker compose ps` | Check container status |
| `docker compose logs` | View application logs |
| `docker exec gamehub-apache ...` | Execute commands inside Apache |
| `docker exec gamehub-postgres ...` | Execute commands inside PostgreSQL |

## Docker Concepts Practiced

- Dockerfile
- Docker Compose
- Apache container
- PostgreSQL container
- Custom Docker network
- Named volume
- Bind mount
- Environment variables
- `.env` configuration
- Container-to-container communication
- PHP–PostgreSQL connectivity
- Persistent database storage

## Application Features

- Game library
- Featured game
- Search
- Genre filtering
- Ratings
- Game details modal
- Favorites
- Responsive interface
- PostgreSQL-backed data


![alt text](<Screenshot From 2026-10-03 19-29-07.png>)