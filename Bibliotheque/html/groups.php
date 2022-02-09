<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/groups.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
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
                        <img src="../imags/Collab-cuate-removebg-preview.png" alt="">
                    </div>
                </div>
                <div class="col-3 mt-5 ">
                    <a href="addCours.php">
                        <input value="Add New Cours" class="btn btn-primary ms-1 p-2 px-3 btn-info text-light" type="submit" />
                    </a>
                </div>
                <?php  ?>
                <div class="container">
                    <div class="row">
                        <?php
                        require_once '../db/connection.php';
                        $coursinfo = mysqli_query($link, "SELECT * FROM `cours`");
                        while ($row = mysqli_fetch_array($coursinfo)) { ?>
                            <tr>
                                <!-- <td><img src="../images/prog.png" width="30px" alt=""></td> -->
                                <td><?php echo $row['name'] ?></td>
                                <td><?php echo $row['creator'] ?></td>
                                <td><?php echo $row['rate'] ?></td>
                                <td><?php echo $row['pages'] ?></td>
                            </tr>
                        <?php } ?>
                    </div>

                    <!-- <div class="cart-groups">

                    <div class="c-group">
                        <div class="cart-haeder group-1">
                            <h3>group 1</h3>
                        </div>
                        <ul>
                            <li><i class="fas fa-angle-right"></i><span>ABOU-ELHAITAM OUMAIMA</span></li>
                            <li><i class="fas fa-angle-right"></i><span>DOUGHMI TAHA</span></li>
                            <li><i class="fas fa-angle-right"></i><span>KAZOUM OMAR</span></li>
                            <li><i class="fas fa-angle-right"></i><span>NAFFA ANAS</span></li>
                            <li><i class="fas fa-angle-right"></i><span>Bahassane Dounia</span></li>

                        </ul>
                    </div>
                    <div class="c-group">
                        <div class="cart-haeder group-2">
                            <h3>group 2</h3>
                        </div>
                        <ul>
                            <li><i class="fas fa-angle-right"></i>anas jaballah</li>
                            <li><i class="fas fa-angle-right"></i>Hatim Rouchdi</li>
                            <li><i class="fas fa-angle-right"></i>Jalil Juicha</li>
                            <li><i class="fas fa-angle-right"></i>Chaimae Mita</li>
                            <li><i class="fas fa-angle-right"></i>Mohammed wanir</li>
                        </ul>
                    </div>
                    <div class="c-group">
                        <div class="cart-haeder group-3">
                            <h3>group 3</h3>
                        </div>
                        <ul>
                            <li><i class="fas fa-angle-right"></i>Zakaria Kerkazou</li>
                            <li><i class="fas fa-angle-right"></i>Yasser Elmahfoudi</li>
                            <li><i class="fas fa-angle-right"></i>Khadija Chennaoui</li>
                            <li><i class="fas fa-angle-right"></i>Azeddine Maslouh</li>
                            <li><i class="fas fa-angle-right"></i>Abdelmoughit El Bouhmydy</li>
                            <li><i class="fas fa-angle-right"></i>Zaiad es-sahel</li>
                        </ul>
                    </div>
                    <div class="c-group">
                        <div class="cart-haeder group-4">
                            <h3>group 4</h3>
                        </div>
                        <ul>
                            <li><i class="fas fa-angle-right"></i>Ali Chaayb</li>
                            <li><i class="fas fa-angle-right"></i>Nouhaila Elaalami</li>
                            <li><i class="fas fa-angle-right"></i>Adam Bakkar</li>
                            <li><i class="fas fa-angle-right"></i>Soumia Essabiry</li>
                            <li><i class="fas fa-angle-right"></i>Abderrazzaq Mars</li>
                        </ul>
                    </div>
                    <div class="c-group">
                        <div class="cart-haeder group-5">
                            <h3>group 5</h3>
                        </div>
                        <ul>
                            <li><i class="fas fa-angle-right"></i>Abdelaziz Riad</li>
                            <li><i class="fas fa-angle-right"></i>Achraf Samoudi</li>
                            <li><i class="fas fa-angle-right"></i>Karima Benalioua</li>
                            <li><i class="fas fa-angle-right"></i>Oussama Elkhaldaoui</li>
                            <li><i class="fas fa-angle-right"></i>Imrane chaibi</li>
                        </ul>
                    </div>

                </div> -->


                </div>


            </div>



        </div>


        <script src="../js/app.js"></script>
        <script src="https://kit.fontawesome.com/65e1fe7a04.js" crossorigin="anonymous"></script>
</body>

</html>