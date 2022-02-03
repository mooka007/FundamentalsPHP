<?php

include('operation.php');

$types = ['iamge/jpeg', 'image/png', 'image/jpg'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['name']) && isset($_POST['price']) && isset($_POST['description']) && isset($_FILES['photo'])) {
        if (!empty($_POST['name']) && !empty($_POST['price']) && !empty($_POST['description']) && !empty($_FILES['photo']['name'])) {
            if (in_array($_FILES['photo']['type'], $types)) {
                add($_POST, $_FILES);
                header('location:index.php');
            }
        }
    }
}

?>





<?php include('../master/header.php') ?>
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-6 offset-3">
            <form action="" method="POST" enctype="multipart/form-data" class="form-group">
                <input placeholder="name" type="text" name="name" class="form-control mt-2">
                <input placeholder="price" type="text" name="price" class="form-control mt-2">
                <textarea placeholder="description" cols="30" rows="10" class="form-control" name="description"></textarea>
                <input name="photo" type="file" class="form-control mt-2">
                <button class="form-control btn btn-dark mt-2">save</button>

            </form>

        </div>

    </div>

</div>



<?php include('../master/footer.php') ?>