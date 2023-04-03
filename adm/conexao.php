<?php

try {
    $pdo = new PDO(
        "mysql:host=localhost;dbname=novaescola",
        "root",
        ""
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexão bem-sucedida!";
} catch (PDOException $e) {
    echo "Falha na conexão: " . $e->getMessage();
}
