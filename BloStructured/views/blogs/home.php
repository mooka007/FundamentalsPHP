<?php include '../../controllers/blogControl.php';
$posts = getPosts() ?>


<?php include '../layouts/header.php' ?>


<div class="container mt-5">
    <div class="row">
        <?php foreach ($posts as $post) : ?>


            <div class="card col-md-8" style="width: 18rem;">
                <img src="../../public/img/<?php echo $post['photo'] ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $post['title'] ?></h5>
                    <p class="card-text"><?php echo $post['content'] ?></p>
                    <p class="card-text"><?php echo $post['name'] ?></p>
                    <p class="card-text">Published By :<?php echo $post['username'] ?></p>
                </div>
            </div>
        <?php endforeach ?>











    </div>
</div>



<?php include '../layouts/footer.php' ?>