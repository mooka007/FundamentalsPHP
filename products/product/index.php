<?php include('operation.php') ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- link <i> icons -->
    <link rel="stylesheet" href="../bootstrap.css">
    <title>Portfolio</title>
</head>

<body>

    <?php include('../master/header.php');

    ?>






    <section id="projects">
        <div class="album py-5 bg-light">
            <div class="container">

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <?php foreach ($data['products'] as $product) : ?>
                        <div class="col">
                            <div class="card shadow-sm">
                                <img class="card-img-top" src="img/<?php echo $product['photo'] ?>" alt="Card image cap" />
                                <div class="card-body">
                                    <h3 class="card-title"><?php echo $product['name'] ?></h3>
                                    <h3 class="card-title text-danger"><?php echo $product['price'] ?>$</h3>
                                    <p class="card-text"><?php echo $product['description'] ?>.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a href="details.php?id=<?php echo $product['id'] ?>" type="button" class="btn btn-sm btn-outline-secondary">View</a>
                                            <a type="button" class="btn btn-sm btn-outline-secondary">Edit</a>
                                        </div>
                                        <small class="text-muted">9 mins</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>

    </section>








    <?php include('../master/footer.php') ?>

</body>

</html>