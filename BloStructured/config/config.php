<?php
const ROOT = 'mysql:dbname=db_blog;host=localhost';
const USERNAME = 'root';
const PASSWORD = '';

function connection()
{
    try {
        return new PDO(ROOT, USERNAME, PASSWORD);
    } catch (Exception $e) { // pdo execption ki djam3o fiha les errors li ki traw 
        echo 'ERROR' . $e->getMessage();
    }
}
