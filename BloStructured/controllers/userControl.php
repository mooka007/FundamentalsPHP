<?php
include __DIR__ . '/../config/config.php';
session_start();

$pdo = connection();
function register($name, $email, $password)
{
    global $pdo;
    if ($pdo) {

        $query = 'SELECT * FROM users WHERE email=:email';
        $stat = $pdo->prepare($query);
        $stat->execute([
            ':email' => $email,
        ]);

        $user = $stat->fetchAll();
        if (count($user) == 0) {
            $query = "INSERT INTO users(name,email,password) VALUES (:name,:email,:password)";
            $state = $pdo->prepare($query);
            $state->execute([
                ':name' => $name,
                ':email' => $email,
                ':password' => $password
            ]);
            $_SESSION['email'] = $email;
            return true;
        } else {
            return false;
        }
    }
}

function login($email, $password)
{
    global $pdo;
    if ($pdo) {
        $query = 'SELECT * FROM users WHERE email=:email AND password=:password';
        $stat = $pdo->prepare($query);
        $stat->execute([
            ':email' => $email,
            ':password' => $password
        ]);
        $user = $stat->fetchAll();
        if (count($user) == 0) {
            return false;
        } else {
            $_SESSION['email'] = $email;
            return true;
        }
    }
}
