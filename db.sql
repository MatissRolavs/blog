CREATE DATABASE blog_matiss;

USE blog_matiss;

CREATE TABLE posts(
id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
title VARCHAR(255) NOT NULL
)

INSERT INTO posts
(title)
VALUES
("My First Blog Post"),
("My Second Blog Post");

SELECT * FROM posts;