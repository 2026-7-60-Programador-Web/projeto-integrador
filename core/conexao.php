<?php
require_once __DIR__ . '/../config/config.php';

try {
    $pdo = new PDO(
        'mysql:host=127.0.0.1;port=3306;dbname=' . DB_NAME . ';charset=utf8mb4',
        DB_USER,
        DB_SENHA
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Erro ao conectar ao banco de dados: ' . $e->getMessage());
}
