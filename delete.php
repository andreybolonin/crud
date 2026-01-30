<?php
if ($_GET['id']) {
    $pdo = new PDO("pgsql:host=127.0.0.1;dbname=lms", 'admin', 'root');
    $stmt = $pdo->prepare('DELETE FROM article WHERE id = :id');
    $stmt->bindValue(':id', $_GET['id']);
    $stmt->execute();
}
header('Location: index.php');
