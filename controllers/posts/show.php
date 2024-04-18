<?php
auth();
require "Db.php";


$config = require("config.php");

$db = new Db($config);

$query = "SELECT * FROM posts WHERE id = :id";
$params = [":id" => $_GET["id"]];

$post = $db->execute($query,$params)->fetch();
$title = "Single Post";

require "views/posts/show.view.php";

