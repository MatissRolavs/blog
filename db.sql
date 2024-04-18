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

CREATE TABLE categories(
id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
name VARCHAR(255) NOT NULL,
description TEXT
)

INSERT INTO categories
(name,description)
VALUES
("sport",""),
("music",""),
("food","");

SELECT * FROM categories;

ALTER TABLE posts
ADD FOREIGN KEY category_id REFERENCES categories(id);

UPDATE posts
SET category_id = (SELECT id FROM categories WHERE name = "sport")
WHERE id=1;

UPDATE posts
SET category_id = (SELECT id FROM categories WHERE name = "food")
WHERE id=2;

INSERT INTO posts
(title, category_id)
VALUES
("Blog 3","2")

CREATE TABLE users(
id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
email VARCHAR(255) NOT NULL,
password VARCHAR(255) NOT NULL
);