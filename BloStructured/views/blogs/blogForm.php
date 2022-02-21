<?php include __DIR__ . '/../../controllers/blogControl.php';
// ila kan ch ga3ma whd connecte o dar f url blogForm 
// ga3ma ghadi idih
// ghadi sefto login huwa lewal bach itconnecta m3a hbiba :D 
// once you will connect and the session verify who the fuuck you are 
// you will have access to this mf blogForm

if (!isset($_SESSION['email']) && empty($_SESSION['email'])) {
    header('location: ../auth/login.php');
}

$categories = getcategories();
$error = "";
$succes = "";
$types = ['image/jpeg', 'image/png', 'image/jpg'];

// validate a form including a file 
if (isset($_POST['title']) && isset($_POST['content']) && isset($_FILES['photo']['name'])) {

    if (!empty($_POST['title']) && !empty($_POST['content']) && !empty($_FILES['photo']['name'])) {

        if (in_array($_FILES['photo']['type'], $types)) {
            create($_POST['title'], $_POST['content'], $_FILES['photo']['name'], $_POST['category_id']);
            $succes = "khedma N9ia (y)";

            $path = $_FILES['photo']['tmp_name'];
            $destination = '../../img/' . $_FILES['photo']['name'];

            move_uploaded_file($path, $destination);
        } else {
            $error = 'File Must be in .png or .jpeg or .jpg';
        }
    } else {
        $error = 'field Missing a tepi';
    }
}



?>




<?php include '../layouts/header.php' ?>









<div class="container mt-5">
    <div class="row">
        <form method="post" class="col-md-6 form-group offset-3" enctype="multipart/form-data">
            <!-- affichage du l'error -->
            <?php
            if ($error != '') :
            ?>
                <div class="mt-5 moka">
                    <?php echo $error ?>
                </div>
            <?php endif ?>
            <?php
            if ($succes != '') :
            ?>
                <div class="mt-5 moka">
                    <?php echo $succes ?>
                </div>
            <?php endif ?>
            <input type="text" name="title" placeholder="Title" class="form-control mt-2" />
            <input type="text" name="content" placeholder="Content" class="form-control mt-2" />
            <select name="category_id" class="form-control mt-2">
                <?php foreach ($categories as $category) : ?>
                    <option value="<?php echo $category['id'] ?>"><?php echo $category['name'] ?></option>
                <?php endforeach ?>
            </select>
            <input name="photo" type="file" class="form-control mt-2" />
            <button class="btn btn-dark mt-2 form-control">Save</button>

        </form>

    </div>

</div>







<?php include '../layouts/footer.php' ?>