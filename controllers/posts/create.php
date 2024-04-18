<?php
auth();
require "Db.php";

$config = require("config.php");

$db = new Db($config);

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $errors = [];


    if(empty($errors)){
    $query = "INSERT INTO posts (title, category_id) VALUES (:title, :category_id);";

    $params = [
        ":title" => $_POST["title"],
        ":category_id" => $_POST["category-id"]
    ];
    $db->execute($query,$params);

    header("Location: /");
    die();
    }
}



$title = "Create Posts";
require "views/posts/create.view.php";