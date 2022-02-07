<?php
if (isset($_post['insert'])) {
    // include 'array.php';
    $content = file_get_contents('../json/studArray.json');
    $data = json_decode($content, true); //kat raja3 members.json readable, convertit to variable PHP.

    function add()
    {
        global $data;
        $data['tableau'][] = [
            // 'id' => count($data['array']) + 1,
            'username' => $_POST['username'],
            'email' => $_POST['email'],
            'phone' => $_POST['phone'],
            // 'number' => $_POST['number']

        ];

        $json = json_encode($data); //Retourne la représentation JSON d'une valeur
        file_put_contents('../json/studArray.json', $json);
    }
    header('location:student.php');
}
