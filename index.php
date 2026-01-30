<?php
$pdo = new PDO("pgsql:host=127.0.0.1;dbname=lms", 'admin', 'root');
$stmt = $pdo->prepare('SELECT * FROM article');
$stmt->execute();
$articles = $stmt->fetchAll();

foreach ($articles as $article) {
    echo $article['name'] . ' ' . $article['created_at'] . ' <a href="update.php?id='.$article['id'].'">update</a>' . ' <a href="delete.php?id='.$article['id'].'">delete</a>' .  '<br>';
}
?>

<a href="create.php">create</a>
