<?php
setcookie('user', '123apah');
setcookie('user', '123apah', time() + 3600)
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?php

    foreach ($_GET as $key => $value) {
        echo '<br>';
        echo "$key is $value" . "\n";
    }

    echo '<hr>';

    $color = ['blue', 'red', 'green', 'yellow'];
    $newColors = [...$color, 'black', 'ayyy'];

    print_r($newColors);
    foreach ($newColors as $key => $color) {
        echo '<br>';
        echo $color;
    }

    // add new items 
    echo '<hr>';
    $newColors[] = 'white';
    print_r($newColors);

    echo '<hr>';
    // Ternary Operator
    $status = true;
    if ($status) {
        echo 'welcome to the dashboard';
    } else {
        echo 'plz try again';
    }

    echo '<hr>';
    echo $status ? 'sir tkawad' : 'welcome';


    echo '<hr>';

    $user = [
        [
            'name' => 'ana',
            'email' => 'hia@bo9al.com'
        ],
        [
            'name' => 'nta',
            'email' => 'hqqqqa@bo9al.com'
        ],
        [
            'name' => '7naa',
            'email' => '7naa@bo9al.com'
        ],
        [
            'name' => 'tsha',
            'email' => 'tshaia@bo9al.com'
        ],
    ];

    foreach ($user as $key => $value) {
        echo '<br>';
        echo "smia hia hadi : " . $value['name'];
    }

    echo '<hr>';
    foreach ($user as $key => $value) {
        echo '<br>';
        if ($value['name'] == '7naa') {
            break;
        }
        echo $value['name'];
    }


    echo '<hr>';
    function double($val){ 
        $val = $val * 2; 
        return $val; 
    } 
    $val = 15; 
    $dval = double($val); 
    echo "Value = $val Doubled = $dval";
    ?>
</body>

</html>