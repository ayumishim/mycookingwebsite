<?php
$servername = "/cloudsql/ayumin:asia-northeast1:ayumi";
$username = "root";
$password = "";
$database = "Ayumi";

// create database query: CREATE DATABASE IF NOT EXISTS Ayumi CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table Recipes if it doesn't exist
$sql = "CREATE TABLE Recipes (
id BIGINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
title VARCHAR(255) NOT NULL,
description TEXT NOT NULL,
image_url TEXT
)";

if ($conn->query($sql) === TRUE) {
  echo "Table MyGuests created successfully";
} else {
  //echo "Error creating table: " . $conn->error;
}

// sql to create table Ingredients if it doesn't exist
$sql2 = "CREATE TABLE Ingredients (
id BIGINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
recipe_id BIGINT NOT NULL,
name VARCHAR(255) NOT NULL,
quantity VARCHAR(255) NOT NULL,
i_order  BIGINT NOT NULL
)";

if ($conn->query($sql2) === TRUE) {
  echo "Table MyGuests created successfully";
} else {
  //echo "Error creating table: " . $conn->error;
}

// sql to create table Steps if it doesn't exist
$sql3 = "CREATE TABLE Steps (
id BIGINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
recipe_id BIGINT NOT NULL,
content TEXT NOT NULL,
i_order  BIGINT NOT NULL
)";

if ($conn->query($sql3) === TRUE) {
  echo "Table MyGuests created successfully";
} else {
  //echo "Error creating table: " . $conn->error;
}

?>

