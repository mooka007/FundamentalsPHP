<?php
$tableau = [
    [
        "id" => 1,
        "First" => 'apah',
        "last" => 'apah@gmail.com',
        "handle" => 'apah',
        "hadnle" => "08/Dec/2022",
    ],
    [
        "id" => 2,
        "First" => 'toooka',
        "last" => 'tooooka@gmail.com',
        "handle" => '06313223',
        "hadnle" => "08/Dec/2022",
    ],
    [
        "id" => 3,
        "First" => 'atah',
        "last" => 'atah@gmail.com',
        "handle" => '06313223',
        "hadnle" => "08/Dec/2022",
    ],
    [
        "id" => 4,
        "First" => 'atah',
        "last" => 'atah@gmail.com',
        "handle" => '06313223',
        "hadnle" => "08/Dec/2022",
    ],
    [
        "id" => 5,
        "First" => 'akha',
        "last" => 'akha@gmail.com',
        "handle" => '06313223',
        "hadnle" => "08/Dec/2022",
    ],
    [
        "id" => 6,
        "First" => 'akak',
        "last" => 'akak@gmail.com',
        "handle" => '06313223',
        "hadnle" => "08/Dec/2022",
    ],
    [
        "id" => 7,
        "First" => 'eeeee',
        "last" => 'eeee@gmail.com',
        "handle" => '06313223',
        "hadnle" => "08/Dec/2022",
    ],

]
?>

<?php foreach ($tableau as $key => $value) : ?>
    <tr>
        <td><?php echo $value['First'] ?></td>
        <td><?php echo $value['last'] ?></td>
        <td><?php echo $value['handle'] ?></td>
        <td><?php echo $value['handle'] ?></td>
        <td><a href="../E-class/view.php"><i class="bi bi-eye fs-4 text-info eye-btn"></i></a></td>
    </tr>
<?php endforeach ?>