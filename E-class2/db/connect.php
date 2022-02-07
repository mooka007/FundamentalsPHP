<?php
//Attempt Mysql Server connection. Assuming you are  running MYSQL Server with default setting (User: 'root' with no password ' ')
$link = mysqli_connect('localhost', 'root', '', 'e_class_db');

//Check connection 
// if ($link === false) {
//     die('Error Connectio' . mysqli_connect_error());
// } else {
//     echo "Connection Successfully"  . mysqli_get_host_info($link);
// }
