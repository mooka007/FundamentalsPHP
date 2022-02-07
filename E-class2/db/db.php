<?php
require_once 'connect.php';

$sql = "CREATE DATABASE IF NOT EXISTS e_class_db";
if (mysqli_query($link, $sql)) {
    echo "Database created successfully";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

$sqql = "CREATE TABLE IF NOT EXISTS students(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(30) NOT NULL,
    email VARCHAR(70) NOT NULL UNIQUE
)";
if (mysqli_query($link, $sqql)) {
    echo "table created successfully.";
} else {
    echo "error : could not able to execute $sqql" . mysqli_error($link);
}
