<?php



$stored_pass = 'meow123';  // Pw is meow123
$failure = false;
if (isset($_POST['user']) && isset($_POST['pass'])) {
    if (strlen($_POST['user'] < 1 || strlen($_POST['pass'] < 1))) {
        $failure = "Username and Password are Required";
    } else {

        $check = $_POST['pass'];
        if ($check == $stored_pass) {
            header("location:game.php");
            return;
        } else {
            $failure = "Incorrect Password";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <title>Document</title>
</head>

<body>

    <div class="container d-flex justify-content-center align-items-center position-relative mt-5">

        <form method="POST" class="mt-5">
            <div class="p-4">
                <div class="mb-3">
                    <label for="name" class="form-label">Username</label>
                    <input type="text" name="user" class="form-control" placeholder="Enter your email" id="email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="pass" class="form-control" placeholder="Enter your password" id="password">
                    <label>
                        <button type="submit" class="btn bg-primary text-white text-center mt-2 w-100 d-flex align-items-center justify-content-center">Login</button>
                    </label>
                </div>



                <div class="d-flex justify-content-around mt-2 pt-3">
                    <p class=" text-muted "><a href="https://www.google.com">
                            Forgot your password?
                        </a></p>
                    <p class="d-flex justify-content-center">
                        For a password hint,
                        view source and find a password hint
                        in the HTML comments.
                        <!-- Hint: The password is the four character sound a cat
                            makes (all lower case) followed by 123. -->
                    </p>
                </div>
            </div>
        </form>

    </div>
</body>

</html>