<?php

require "functions.php";
require "Db.php";

$config = require("config.php");

$query = "SELECT * FROM posts JOIN categories ON posts.category_id = categories.id";
$params = [];

if(isset($_GET["id"])&&$_GET["id"]!=""){
    $id = ($_GET["id"]);
    $query .= " WHERE id=:id";
    $params = [":id" => $id];
}
elseif(isset($_GET["category"])&&$_GET["category"]!=""){
    $category = ($_GET["category"]);
    $query .= " WHERE name=:category";
    $params = [":category" => $category];
}


$db = new Db($config);
$posts = $db->execute($query,$params)->fetchAll();

echo "<form>";
echo "<input name='id'/>";
echo "<button>Submit ID</button>";
echo "</form>";

echo "<form>";
echo "<input name='category'/>";
echo "<button>Submit Category</button>";
echo "</form>";

echo "<h1>Posts</h1>";

echo "<ul>";
foreach($posts as $post){
    echo "<li>".$post["title"]."</li>";
}
echo "</ul>"
?>