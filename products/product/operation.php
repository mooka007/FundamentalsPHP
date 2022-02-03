<?php
$content = file_get_contents('products.json');
$data = json_decode($content, true);
function add($post, $files)
{
    global $data;

    $data['products'][] = [
        'id' => count($data['products']) + 1,
        'name' => $_POST['name'],
        'price' => $_POST['price'],
        'description' => $_POST['description'],
        'photo' => $_FILES['photo']['name'],
    ];

    $json = json_encode($data);
    file_put_contents('products.json', $json);


    $path = $files['photo']['tmp_name']; //stores the name of the temporary file
    $dest = 'img/' . $files['photo']['name'];

    move_uploaded_file($path, $dest);


    //$_FILES['x']['name'] stores the name of the file on the user's filesystem - this is only extra information that is set up by the browser - just like $_FILES['x']['type'].
    //$_FILES['x']['tmp_name'] stores the name of the uploaded file on the server.
    // (could be anywhere on your system, depending on your config settings, but the user has no control, so this isn't tainted)
}
