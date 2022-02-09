<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Student-list.css">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />


    <title>meta class 3</title>
</head>

<body>
    <div class="contener-body">
        <div class="nav-bar-lift">
            <div class="nav-bar-badiin" id="nav_bar">
                <div class="nav">

                    <div class="sercal1">
                        <i class="fas fa-bars" id="mune"></i>
                        <i class="far fa-times-circle" id="x-nav"></i>
                    </div>


                    <div class="title-list">
                        <h1>meta class 3</h1>
                    </div>

                    <div class="list-link">
                        <ul>

                            <li><a href="../index.html"><img src="https://img.icons8.com/material/24/000000/home.png" /><span>home</span></a></li>
                            <li><a href="profile.html"><img src="https://img.icons8.com/material/24/000000/business-conference-female-speaker.png" /><span>Profile</span></a></li>
                            <li><a href="Student-list.php"><img src="https://img.icons8.com/material/24/000000/conference-background-selected.png" /><span>Student list</span></a></li>
                            <li><a href="groups.html"><img src="https://img.icons8.com/material/24/000000/business-conference-female-speaker.png" /><span>Courses</span></a></li>
                            <li><a href="Iternal-rules.html"><img src="https://img.icons8.com/material/24/000000/detain--v2.png" /><span>Iternal rules</span></a></li>
                            <li class="a-drobdawn"><a id="a-drobdawn"><img src="https://img.icons8.com/material/24/000000/fine-print.png" /><span>days</span><i class="fas fa-angle-right"></i></a>

                                <ul class="drobdawn">
                                    <li><a href="../days/Monday.html">Monday</a></li>
                                    <li><a href="../days/Tuesday.html">Tuesday</a></li>
                                    <li><a href="../days/Wednesday.html">Wednesday</a></li>
                                    <li><a href="../days/Thursday.html">Thursday</a></li>
                                    <li><a href="../days/Friday.html">Friday</a></li>
                                    <li><a href="../days/Saturday.html">Saturday</a></li>
                                    <li><a href="../days/Sunday.html">Sunday</a></li>
                                </ul>

                            </li>
                            <li><a href="../table-day/day-table.html"><img srcset="https://img.icons8.com/ios/344/day-view.png 2x" /><span>table days</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <div class="content-lyout">
            <div class="contener-lyout">

                <div class="content-lyout-desc">

                    <div class="left-content-lyout-desc">
                        <h1> Welcome </h1>
                        <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Totam libero animi expedita,
                            cupiditate alias et, in at voluptates molestias, doloribus velit dicta!
                            Officia sit deserunt perspiciatis in ullam error itaque!
                        </p>
                    </div>

                    <div class="re-content-lyout-desc">
                        <img src="../imags/Discussion-rafiki__1_-removebg-preview.png" alt="">
                    </div>
                </div>

                <?php
                require_once '../db/connection.php';
                if (isset($_POST['save'])) {
                    $name = $_POST['name'];
                    $creator = $_POST['creator'];
                    $rate = $_POST['rate'];
                    $pages = $_POST['pages'];


                    $sqll = "INSERT INTO `cours` (name, creator, rate, pages) VALUES ('$name','$creator', '$rate','$pages')";
                    if (!mysqli_query($link, $sqll)) {
                        die('die die die : ' . mysqli_error());
                    }
                }
                ?>



                <br><br>
                <form action="groups.php" method="POST">
                    <div class="container mt-5">
                        <div class="form-list">
                            <div class="form-group col-md-6">
                                <label>Name</label>
                                <input placeholder="name" class="form-control" type="text" name="name" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Creator</label>
                                <input placeholder="creator" class="form-control" type="text" name="creator" required>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Rate</label>
                            <input placeholder="rate" class="form-control" type="number" name="rate" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Pages</label>
                            <input placeholder="pages" class="form-control" type="number" name="pages" required>
                        </div>
                        <div class="form-group col-md-6">
                            <button type="submit" name="save" class="form-group btn btn-primary">Add New Cours</button>
                        </div>
                    </div>
                </form>



            </div>


        </div>



    </div>


    <script src="../js/app.js"></script>
    <script src="../js/list.js"></script>
    <script src="https://kit.fontawesome.com/65e1fe7a04.js" crossorigin="anonymous"></script>
</body>

</html>