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
                            <li><a href="groups.php"><img src="https://img.icons8.com/material/24/000000/business-conference-female-speaker.png" /><span>Courses</span></a></li>
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
                        <h1> Welcome To Meta Class 3</h1>
                        <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Totam libero animi expedita,
                            cupiditate alias et, in at voluptates molestias, doloribus velit dicta!
                            Officia sit deserunt perspiciatis in ullam error itaque!
                        </p>
                    </div>

                    <div class="re-content-lyout-desc">
                        <img src="../imags/Discussion-rafiki__1_-removebg-preview.png" alt="">
                    </div>
                </div>


                <div class="col-3 mt-5 ">
                    <a href="form.php">
                        <input value="add New Student" class="btn btn-primary ms-1 p-2 px-3 btn-info text-light" type="submit" />
                    </a>
                </div>
                <!-- <button class="btn-sh" onclick="_random()">tirage au sort</button>

                <button onclick="list()">test</button>-->

                <table>
                    <thead>
                        <tr>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Birthday</th>
                            <th>Email</th>
                            <th>Phone</th>
                        </tr>
                    </thead>
                    <?php
                    require_once '../db/connection.php';
                    $sql = "SELECT * FROM students";
                    $result = $link->query($sql);
                    ?>
                    <!-- Delete-->
                    <?php
                    // $id = $_GET['id'];
                    // $qdelete = "DELETE FROM students WHERE id = '$id'";
                    // mysqli_query($link, $qdelete);

                    ?>
                    <?php


                    if ($result->num_rows > 0) {

                        while ($row = $result->fetch_assoc()) { //fetchi 3la tableau dyal $result

                            echo "<tr>
                   
                   <th>" . $row["firstname"] . "</th>
                    <th>" . $row["lastname"] . "</th>
                    <th>" . $row["birthday"] . "</th>
                    <th>" . $row["email"] . "</th>
                    <th>" . $row["phone"] . "</th> 
                    <th>  
                    <a href=\"delete.php?id=" . $row["id"] . "\" >delet</a>
                    </th>
                    </th>
                    <tr>";
                        }
                    }
                    ?>
                </table>




            </div>


        </div>



    </div>


    <script src="../js/app.js"></script>
    <script src="../js/list.js"></script>
    <script src="https://kit.fontawesome.com/65e1fe7a04.js" crossorigin="anonymous"></script>
</body>

</html>