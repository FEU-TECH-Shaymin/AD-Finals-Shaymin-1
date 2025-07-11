<?php
require_once UTILS_PATH . '/envSetter.util.php'; // This loads your .env values

try {
    $pdo = new PDO(
        sprintf("pgsql:host=%s;port=%s;dbname=%s",
            $_ENV['PG_HOST'],
            $_ENV['PG_PORT'],
            $_ENV['PG_DB']
        ),
        $_ENV['PG_USER'],
        $_ENV['PG_PASS'],
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
} catch (PDOException $e) {
    http_response_code(500);
    exit('Database connection failed: ' . $e->getMessage());
}
