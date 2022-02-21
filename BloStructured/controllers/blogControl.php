<?php
include __DIR__ . '/../config/config.php';
session_start();

$pdo = connection();

function getcategories()
{
    global $pdo;
    if ($pdo) {
        $query = 'SELECT * FROM categories';
        $stat = $pdo->prepare($query);

        $stat->execute();
        return $stat->fetchAll();
    }
}

function create($title, $content, $photo, $category_id,)
{
    global $pdo;
    if ($pdo) {
        $query = 'INSERT INTO posts(title, content,photo, category_id, user_id) VALUES(:title, :content, :photo, :category_id, :user_id)';
        $stat = $pdo->prepare($query);

        $stat->execute([
            ':title' => $title,
            ':content' => $content,
            ':photo' => $photo,
            ':category_id' => $category_id,
            ':user_id' => $_SESSION['id']
        ]);
        return $stat->fetchAll();
    }
}
// hadchi ghadi n3ayto biih 3la posts f page home 
function getPosts()
{
    global $pdo;
    if ($pdo) {
        $query = 'SELECT posts.id,user_id, title, content, photo,users.name as username,  categories.name FROM posts
    INNER JOIN   users
    on posts.user_id=users.id
    INNER JOIN categories
    on posts.category_id=categories.id
    ';
        $stat = $pdo->prepare($query);

        $stat->execute();
        return $stat->fetchAll();
    }
}


function delete($id)
{
    global $pdo;
    if ($pdo) {
        $query = 'DELETE from posts WHERE id=:id';
        $stat = $pdo->prepare($query);
        $stat->execute([
            ':id' => $id
        ]);
    }
}
function search($word)
{
    global $pdo;
    if ($pdo) {
        $query = 'SELECT posts.id,user_id, title, content, photo,users.name as username,  categories.name FROM posts
    INNER JOIN   users
    on posts.user_id=users.id
    INNER JOIN categories
    on posts.category_id=categories.id
    WHERE title like :title
    ';
        $stat = $pdo->prepare($query);

        $stat->execute([
            ':title' => "$word%"
        ]);
        return $stat->fetchAll();
    }
}
