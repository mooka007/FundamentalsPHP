<?php
require_once('../db/connect.php');
// include('../master/operation.php');
?>


<body>
  <div class="d-flex" id="wrapper">
    <!-- Sidebar-->
    <?php include('../master/sidebar.php')  ?>
    <!-- top Navigation -->
    <?php include('../master/topnavigation.php') ?>

    <!-- Page content-->
    <div class="container-fluid">

      <div class="container">
        <div class="row  pt-4 d-flex justify-content-between">
          <div class="col-5">
            <h1 class="fw-bold fs-2">Students List</h1>
          </div>
          <div class="col-3 ">
            <a href="form.php">
              <input value="add New Student" class="btn btn-primary ms-1 p-2 px-3 btn-info text-light" type="submit" />
            </a>
          </div>
        </div>
        <div class="row p-3 pt-4">

          <table class="table table-borderless spacing-table">
            <thead>
              <tr>
                <th scope="col"></th>
                <th scope="col" class="text-capitalize">name</th>
                <th scope="col" class="text-capitalize">email</th>
                <th scope="col" class="text-capitalize">phone</th>

                <th scope="col" class="text-capitalize">date of admission</th>
                <th scope="col"></th>
              </tr>
            </thead>

            <thead>
              <?php
              // $content = file_get_contents('../json/studArray.json');
              // $data = json_decode($content, true); //kat raja3 members.json readable, convertit to variable PHP.
              ?>
              <?php $tableau = mysqli_query($link, "SELECT * FROM `students`");
              while ($row = mysqli_fetch_array($tableau)) { ?>
                <tr>

                  <td><img src="../images/prog.png" width="30px" alt=""></td>
                  <td><?php echo $row['username'] ?></td>
                  <td><?php echo $row["email"] ?></td>
                  <td><?php echo $row['username'] ?></td>
                  <td><?php echo $row['username'] ?></td>
                  <td>
                    <a href=""><i class="bi bi-pencil fs-5 text-info"></i></a>
                    <a href="" class="m-3"><i class="bi bi-trash fs-5 text-info"></i></a>
                  </td>
                  <!-- <td>
                    <a href="index.php?edit=<?php echo $row['id']; ?>" class="edit_btn">Edit</a>
                    <a href="" class="del_btn">Delete</a>
                  </td> -->
                </tr>
              <?php } ?>
            </thead>

          </table>

        </div>

      </div>


    </div>
  </div>
  </div>


  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script src="js/scripts.js"></script>
</body>

</html>