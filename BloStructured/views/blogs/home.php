<?php include '../../controllers/blogControl.php';
$posts = getPosts();
if (isset($_POST['id']) && !empty($_SESSION['id'])) {
    delete($_POST['id']);
    header('location: home.php');
}
?>


<?php include '../layouts/header.php' ?>


<div class="container mt-5">
    <!-- checking what the session contains -->
    <!-- <php print_r($_SESSION); ?> -->
    <!-- -->
    <div class="row">
        <?php foreach ($posts as $post) : ?>


            <div class="card col-md-8" style="width: 18rem;">
                <img src="../../public/img/<?php echo $post['photo'] ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $post['title'] ?></h5>
                    <p class="card-text"><?php echo $post['content'] ?></p>
                    <p class="card-text"><?php echo $post['name'] ?></p>
                    <p class="card-text">Published By :<?php echo $post['username'] ?></p>
                    <ul class="list-group">
                        <!-- once the post and session has the same id means the same person display those 2 buttons -->
                        <?php if ($post['user_id'] == $_SESSION['id']) : ?>
                            <li class="list-group-item">
                                <form method="post">
                                    <input type="hidden" name="id" value='<?php echo $post["id"] ?>' />
                                    <button class="btn btn-danger">Delete</button>
                                    <a href="" class="btn btn-warning">Edit</a>
                                </form>
                            </li>
                        <?php endif ?>
                    </ul>
                </div>
            </div>
        <?php endforeach ?>











    </div>
</div>



<?php include '../layouts/footer.php' ?>