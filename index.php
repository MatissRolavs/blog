<?php

$connection_string = "mysql:host=localhost;dbname=blog_matiss;user=root;password=;charset=utf8mb4";
$pdo = new PDO($connection_string);

//Sagatavo sql izpildei
$query = $pdo->prepare("SELECT * FROM posts");
//Izpildit sql
$query->execute();
$posts = $query->fetchAll(PDO::FETCH_ASSOC);

echo "<pre>";
var_dump($posts);
echo "</pre>";
?>