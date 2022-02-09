<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'meta-class');

$link = mysqli_connect('localhost', 'root', '', 'meta-class');

if ($link === false) {
    die("Error: Could Not Connect." . mysqli_connect_error());
}
