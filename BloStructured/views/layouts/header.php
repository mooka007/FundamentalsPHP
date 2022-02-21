<?php
// include '../../controllers/blogControl.php';
if (isset($_POST['logout'])) {
    session_destroy();
    header('location: home.php');
}

if (isset($_POST['search']) && !empty($_POST['search'])) {
    $posts = search($_POST['search']);
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Carousel Template · Bootstrap v5.1</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/carousel/">
    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/5.1/examples/carousel/carousel.css" rel="stylesheet">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Carousel</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../blogs/home.php">Home</a>
                        </li>
                        <!-- once you click logout this shit will not display  -->

                        <?php if (isset($_SESSION['email']) && !empty($_SESSION['email'])) : ?>
                            <li class="nav-item">
                                <a class="nav-link" href="blogForm.php">Create</a>
                            </li>
                        <?php endif ?>

                    </ul>
                    <form method="POST" class="d-flex me-2">
                        <input name="search" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                    <?php if (isset($_SESSION['email']) && !empty($_SESSION['email'])) : ?>
                        <form method="post" class="d-flex form-inline mt-md-0 ml-4">
                            <button name="logout" class="my-2 my-sm-0 btn btn-outline-danger" type="submit">Log Out</button>
                        </form>
                    <?php endif ?>

                    <?php if (!isset($_SESSION['email']) && empty($_SESSION['email'])) : ?>
                        <form method="get" action="../auth/login.php" class="d-flex form-inline mt-md-0 ml-4">
                            <button class="my-2  btn btn-outline-danger" type="submit">Log In</button>
                        </form>
                    <?php endif ?>
                </div>
            </div>
        </nav>
    </header>