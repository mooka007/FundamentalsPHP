<?php
include  '../../controllers/userControl.php';
// ila kan ch whd connecte o dar f url register 
// ga3ma ghadi idih
if (isset($_SESSION['email']) && !empty($_SESSION['email'])) {
    header('location: ../blogs/home.php');
}


$error = '';
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])) {
    if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password'])) {
        if (register($_POST['name'], $_POST['email'], $_POST['password']) == false) {
            $error = '<h1 class="text-center text-danger">Email All Ready Exist</h1>';
        } else {
            header('location: login.php');
        }
    } else {
        $error =  '<h1 class="text-center text-danger">field Missing </h1>';
    }
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
    <title>Signin </title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">



    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">



    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/5.1/examples/sign-in/signin.css" rel="stylesheet">
</head>

<body class="text-center">

    <main class="form-signin">
        <form method="post">
            <!-- <img class="mb-4" src="/docs/5.1/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->
            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

            <!-- affichage du l'error -->
            <?php
            if ($error != '') : ?>
                <div>
                    <?php echo $error ?>
                </div>
            <?php endif ?>
            <div class="form-floating">
                <input name="name" type="text" class="form-control mt-2" id="floatingInput" placeholder="name">
                <label for="floatingInput">Name</label>
            </div>
            <div class="form-floating">
                <input name="email" type="email" class="form-control mt-2" id="floatingInput" placeholder="Email">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
                <input name="password" type="password" class="form-control mt-2" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>

            <!-- <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div> -->
            <button class="w-100 btn btn-lg btn-primary" name="submit" type="submit">Sign up</button>
            <p class="mt-5 mb-3 text-muted">&copy; Made With &#x1F49D; </p>
        </form>
    </main>


</body>

</html>