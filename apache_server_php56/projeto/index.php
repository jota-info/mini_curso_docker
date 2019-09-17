<?php

$dbuser = 'root';
$dbpass = 'root';

try {
    $pdo = new PDO("mysql:host=mysql;dbname=blog", $dbuser, $dbpass);
    $statement = $pdo->prepare("SELECT * FROM posts");
    $statement->execute();
    $posts = $statement->fetchAll(PDO::FETCH_OBJ);

    echo "<h2>#Docker funciona!</h2>";
    echo "<ul>";
    foreach ($posts as $post ) {
        echo "<li>".$post->title."</li>";
    }
    echo "</ul>";

} catch(PDOException $e) {
    echo $e->getMessage();
}

phpinfo();
