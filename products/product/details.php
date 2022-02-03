<?php include('../master/header.php') ?>
<?php include('operation.php') ?>

<section id="projects">
    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <?php foreach ($data['products'] as $product) : ?>
                    <?php if ($product['id'] == $_GET['id']) : ?> 
                        <div class="col">
                            <div class="card shadow-sm">
                                <img class="card-img-top" src="img/<?php echo $product['photo'] ?>" alt="Card image cap" />
                                <div class="card-body">
                                    <h3 class="card-title"><?php echo $product['name'] ?></h3>
                                    <h3 class="card-title text-danger"><?php echo $product['price'] ?>$</h3>
                                    <p class="card-text"><?php echo $product['description'] ?>.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                            <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                        </div>
                                        <small class="text-muted">9 mins</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif ?>
                <?php endforeach ?>
            </div>
        </div>
    </div>

</section>

<?php include('../master/footer.php') ?>