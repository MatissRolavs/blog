<?php
auth();
require "Db.php";


$config = require("config.php");

$db = new Db($config);

$query = "SELECT * FROM posts WHERE id = :id";
$params = [":id" => $_GET["id"]];

$post = $db->execute($query,$params)->fetch();

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $errors = [];

    if(trim($_POST["title"]) == ""){
        $errors["title"] = "Title cannot be empty";
    }

    if(strlen($_POST["title"]) > 255){
        $errors["title"] = "Title cannot be longer than 255 characters";
    }

    if($_POST["category-id"] > 3 || $_POST["category-id"] < 1  ){
        $errors["category-id"] = "Invalid category ID";
    }

    if(empty($errors)){
    $query = "UPDATE posts SET title = :title, category_id = :category_id WHERE id = :id";

    $params = [
        ":title" => $_POST["title"],
        ":category_id" => $_POST["category-id"],
        ":id" => $_GET["id"]
    ];
    $db->execute($query,$params);

    header("Location: /");
    die();
    }
}
$title = "Edit";
require "views/posts/edit.view.php";