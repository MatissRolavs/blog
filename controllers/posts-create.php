<?php
require "functions.php";
require "Db.php";
$config = require("config.php");

$params = [];

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $query = "INSERT INTO posts (title, category_id) VALUES (:title, :category_id);";
}

$title = "Create Posts";
require "views/posts-create.view.php";