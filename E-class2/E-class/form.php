<body>
    <div class="d-flex" id="wrapper">
        <?php include('../master/sidebar.php');
        include('../master/topnavigation.php');
        ?>

        <!-- // include('../E-class/validator.php');
        // include('../master/operation.php');

        // if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['number']) && isset($_POST['email'])) {
        // if (!empty($_POST['username']) && !empty($_POST['email']) & !empty($_POST['phone'])) {
        // if (!alpha($_POST['username'])) {
        // if (!email($_POST['email'])) {
        // if (!int($_POST['phone'])) {
        // if (!int($_POST['phone'])) {
        // add($_POST);
        // header('location:student.php');
        // }
        // }
        // }
        // }
        // }
        // }
        // } -->

        <?php
        require_once '../db/connect.php';

        if (isset($_POST['insert'])) {
            $username = $_POST['username'];
            $email = $_POST['email'];

            $sql = "INSERT INTO `students`(username, email) VALUES('$username', '$email')";

            if (!mysqli_query($link, $sql)) {
                die('die die die : ' . mysqli_error());
            }

            header('location:student.php');
        }



        ?>


        <form action="" method="POST">
            <div class="form-control d-flex justify-content-end">
                <div class="row">
                    <div class="form-group mt-4">
                        <input placeholder="username" type="text" name="username" required>
                    </div>
                    <div class="form-group mt-4">
                        <input placeholder="Email" type="text" name="email" required>
                    </div>
                    <div class="form-group mt-4">

                        <input placeholder="Phone" type="text" name="phone" required>
                    </div>

                    <div class="form-group mt-4">

                        <input placeholder="Date of Admission" type="text" name="phone" required>
                    </div>
                    <div class="form-group mt-4">
                        <button class="btn btn-primary" type="Submit" name="insert">Add</button>

                    </div>
                </div>
            </div>
        </form>
    </div>
    </div>


    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>