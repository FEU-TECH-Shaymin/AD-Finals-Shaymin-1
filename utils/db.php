<?php
require_once __DIR__ . '/envSetter.php';

try {
    $pdo = new PDO(
        sprintf(
            "pgsql:host=%s;port=%s;dbname=%s",
            $_ENV['DB_HOST'],
            $_ENV['DB_PORT'],
            $_ENV['DB_NAME']
        ),
        $_ENV['DB_USER'],
        $_ENV['DB_PASS'],
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
} catch (PDOException $e) {
    // In production, log this instead of echoing
    http_response_code(500);
    exit('Database connection failed.');
}
