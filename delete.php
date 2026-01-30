<?php
if ($_GET['id']) {
    $pdo = new PDO("pgsql:host=database;dbname=article", 'user', 'password');
    $stmt = $pdo->prepare('DELETE FROM article WHERE id = :id');
    $stmt->bindValue(':id', $_GET['id']);
    $stmt->execute();
}
header('Location: index.php');
