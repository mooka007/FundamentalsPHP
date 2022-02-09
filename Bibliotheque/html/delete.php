<?php
require_once '../db/connection.php';
// $id = $_GET["id"];
// $qdelete = "DELETE FROM students WHERE id = '$id'";
// mysqli_query($link, $qdelete);
// header('location: Student-list.php');

$id = $_GET["id"];
$sqldedlete = "DELETE FROM students WHERE id = '$id'";
if (mysqli_query($link, $sqldedlete)) {
    echo "Records were deleted successfully.";
} else {
    echo "ERROR: Could not able to execute $sqldedlete. " . mysqli_error($link);
}
header('location: Student-list.php');
