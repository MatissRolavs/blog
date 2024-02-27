<?php

require "functions.php";
require "Db.php";
$config = require("config.php");

$db = new Db($config);
$posts = $db->execute("SELECT * FROM posts")->fetchAll();

echo "<ul>";
foreach($posts as $post){
    echo "<li>".$post["title"]."</li>";
}
echo "</ul>"
?>