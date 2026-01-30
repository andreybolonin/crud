<?php
if ($_GET['id']) {
    $pdo = new PDO("mysql:host=127.0.0.1;dbname=article", 'user', 'password');
    $stmt = $pdo->prepare('DELETE FROM article WHERE id = :id');
    $stmt->bindValue(':id', $_GET['id']);
    $stmt->execute();
}
header('Location: index.php');
