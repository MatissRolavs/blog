<?php
auth();
require "Db.php";


$config = require("config.php");

$db = new Db($config);

$query = "SELECT posts.* FROM posts";
$params = [];

if(isset($_GET["id"]) && $_GET["id"]!=""){
    $id = trim($_GET["id"]);
    $query .= " WHERE posts.id=:id";
    $params = [":id" => $id];
}
elseif(isset($_GET["category"])&&$_GET["category"]!=""){
    $category = trim($_GET["category"]);
    $query .= " JOIN categories ON posts.category_id = categories.id WHERE name=:category";
    $params = [":category" => $category];
}



$posts = $db->execute($query,$params)->fetchAll();
$title = "Posts";
require "views/posts/index.view.php";