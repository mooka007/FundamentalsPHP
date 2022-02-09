<?php
require_once '../db/connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["save"])) {
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $email = $_POST["email"];
        $birthday = $_POST["birthday"];
        $phone = $_POST["phone"];

        $query = "INSERT INTO students (firstname, lastname, email, birthday, phone) VALUES('$firstname','$lastname', '$email','$birthday',  '$phone')";
        mysqli_query($link, $query);
    }
    header('location: Student-list.php');
}
?>
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





                <br><br>
                <form action="" method="post">
                    <div class="container mt-5">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Firstname</label>
                                <input placeholder="firstname" class="form-control" type="text" name="firstname" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Lastname</label>
                                <input placeholder="lastname" class="form-control" type="text" name="lastname" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>BirthDay</label>
                            <input placeholder="BirthDay" class="form-control" type="date" name="birthday" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input placeholder="Email" class="form-control" type="email" name="email" required>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Phone</label>
                                <input placeholder="Phone" class="form-control" type="number" name="phone" required>
                            </div>
                            <!-- <div class="form-group col-md-4">
                                <label for="inputState">State</label>
                                <select id="inputState" class="form-control">
                                    <option selected>Choose...</option>
                                    <option>...</option>
                                </select>
                            </div> -->
                        </div>
                        <button type="submit" name="save" class="form-group btn btn-primary">Add New Student</button>


                        <!-- <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    Check me out
                                </label>
                            </div>
                        </div> -->

                    </div>
                </form>


                <!-- <form action="" method="POST">
                    <div class="container mt-5">
                        <div class="row col-md-6">
                            <div class="form-control">

                                <div class="form-group mt-4">
                                    <label for="exampleFormControlInput1">firstname</label>
                                    <input placeholder="firstname" type="text" name="firstname" required>
                                </div>
                                <div class="form-group mt-4">
                                    <input placeholder="lastname" type="text" name="lastname" required>
                                </div>
                                <div class="form-group mt-4">

                                    <input placeholder="BirthDay" type="number" name="birthday" required>
                                </div>
                                <div class="form-group mt-4">

                                    <input placeholder="Email" type="email" name="email" required>
                                </div>

                                <div class="form-group mt-4">

                                    <input placeholder="Phone" type="number" name="phone" required>
                                </div>
                                <div class="form-group mt-4">
                                    <a href="student.php">
                                        <input type="Submit" value="Add" name="insert" />
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </form> -->


                <!-- <div class="col-3 mt-5 ">
                    <a href="form.php">
                      <input value="add New Student" class="btn btn-primary ms-1 p-2 px-3 btn-info text-light" type="submit" />
                    </a>
                  </div>
                <!-- <button class="btn-sh"  onclick="_random()">tirage au sort</button> -->

                <!-- <button onclick="list()">test</button> -->
                <!-- <div class="cart-groups-list">
                    <table>
                        <tr>
                            <th>name</th>
                            <th>email</th>
                            <th>Github</th>
                        </tr>
                        <tr>
                            <td>Abdelaziz Riad</td>
                            <td><a href="mailto:riadabdelaziz61@gmail.com" target="_blank">Click here</a></td>
                            <td><a href="https://github.com/riad40" target="_blank">Click here</a></td>
                        </tr>
                        <tr>
                            <td>Anas Naffa</td>
                            <td><a href="mailto:nafeaanass15@gmail.com" target="_blank">Click here</a></td>
                            <td><a href="https://github.com/nafeaanas" target="_blank">Click here</a></td>
                        </tr>
                        <tr>
                            <td>Abderrazzaq Mars</td>
                            <td><a href="mailto:abderrazzaqmars99@gmail.com" target="_blank">Click here</a></td>
                            <td><a href="https://github.com/ABDERRAZZAQMars" target="_blank" target="_blank">Click here</a></td>
                        </tr>
                        <tr>
                            <td>Mohammed wanir</td>
                            <td><a href="mailto:mmohammedwanir67@gmail.com" target="_blank" target="_blank">Click here</a></td>
                            <td><a href="https://github.com/wanir999" target="_blank" target="_blank">Click here</a></td>
                        </tr>
                        <tr>
                            <td>Zaiad es-sahel</td>
                            <td><a href="mailto:zaiadessahel3@gmail.com" target="_blank" target="_blank">Click here</a></td>
                            <td><a href="" target="_blank" target="_blank">Click here</a></td>
                        </tr>
                        <tr>
                            <td>Abdelmoughit El Bouhmydy</td>
                            <td><a href="mailto:elbouhmydyabdelmoughit@gmail.com" target="_blank">Click here</a></td>
                            <td><a href="https://github.com/elbouhmydyabdelmoughit" target="_blank">Click here</a></td>
                        </tr>
                        <tr>
                            <td>Adam Bakkar</td>
                            <td><a href="mailto:adambakkar54@gmail.com" target="_blank">Click here</a></td>
                            <td><a href="https://github.com/feyzeer" target="_blank">Click here</a></td>
                        </tr>
                        <tr>
                            <td>Ali Chaayb</td>
                            <td><a href="mailto:achaaybdev@gmail.com" target="_blank">Click here</a></td>
                            <td><a href="https://github.com/achaayb" target="_blank">Click here</a></td>
                        </tr>
                        <tr>
                            <td>Anas Jabellah</td>
                            <td><a href="mailto:jablcodiing@gmail.com" target="_blank">Click here</a></td>
                            <td><a href="https://github.com/anasjabellah" target="_blank">Click here</a></td>
                        </tr>
                        <tr>
                            <td>Azeddine Maslouh</td>
                            <td><a href="mailto:maslouhazeddine@gmail.com" target="_blank">Click here</a></td>
                            <td><a href="https://github.com/azeddinemas" target="_blank">Click here</a></td>
                        </tr>
                        <tr>
                            <td>Chaimae Mita</td>
                            <td><a href="mailto:chaimae.mita@gmail.com" target="_blank">Click here</a></td>
                            <td><a href="https://github.com/chaimaemita" target="_blank">Click here</a></td>
                        </tr>
                        <tr>
                            <td>Achraf Samoudi</td>
                            <td><a href="mailto:achraf.samoudi@protonmail.com" target="_blank">Click here</a></td>
                            <td><a href="https://github.com/ash-sd" target="_blank">Click here</a></td>
                        </tr>
                        <tr>
                            <td>Nouhaila Elaalami</td>
                            <td><a href="mailto:nouhailaelaalami286@gmail.com" target="_blank">Click here</a></td>
                            <td><a href="https://github.com/nouha286" target="_blank">Click here</a></td>
                        </tr>
                        <tr>
                            <td>Dounia Bahassane</td>
                            <td><a href="mailto:dounia0bahassane@gmail.com" target="_blank">Click here</a></td>
                            <td><a href="https://github.com/DOUNIABA" target="_blank">Click here</a></td>
                        </tr>
                        <tr>
                            <td>Hatim Rouchdi</td>
                            <td><a href="mailto:rouchdi.hatim@gmail.com" target="_blank">Click here</a></td>
                            <td><a href="https://github.com/rhatim" target="_blank">Click here</a></td>
                        </tr>
                        <tr>
                            <td>Imrane chaibi</td>
                            <td><a href="mailto:imranchaibi1@gmail.com" target="_blank">Click here</a></td>
                            <td><a href="https://github.com/hollyufo" target="_blank">Click here</a></td>
                        </tr>
                        <tr>
                            <td>Jalil Juicha</td>
                            <td><a href="mailto:juichajalil1@gmail.com" target="_blank">Click here</a></td>
                            <td><a href="https://github.com/JalilJuicha" target="_blank">Click here</a></td>
                        </tr>
                        <tr>
                            <td>Karima Benalioua</td>
                            <td><a href="mailto:karimabenalioua9@gmail.com" target="_blank">Click here</a></td>
                            <td><a href="https://github.com/BENALIOUAKARIMA" target="_blank">Click here</a></td>
                        </tr>
                        <tr>
                            <td>Khadija Chennaoui</td>
                            <td><a href="mailto:khadijach896@gmail.com" target="_blank">Click here</a></td>
                            <td><a href="https://github.com/khadija-chennaoui" target="_blank">Click here</a></td>
                        </tr>
                        <tr>
                            <td>Omar Kazoum</td>
                            <td><a href="mailto:omarkazoum96@gmail.com" target="_blank">Click here</a></td>
                            <td><a href="https://github.com/omarKazoum" target="_blank">Click here</a></td>
                        </tr>
                        <tr>
                            <td>Oumaima ABOU-eLHAITAM</td>
                            <td><a href="mailto:omarkazoum96@gmail.com" target="_blank">Click here</a></td>
                            <td><a href="https://github.com/omarKazoum" target="_blank">Click here</a></td>
                        </tr>
                        <tr>
                            <td>Oussama Elkhaldaoui</td>
                            <td><a href="mailto:oussama.elkhaldaoui@gmail.com" target="_blank">Click here</a></td>
                            <td><a href="https://github.com/elkhaldaoui" target="_blank">Click here</a></td>
                        </tr>
                        <tr>
                            <td>Soumia Essabiry</td>
                            <td><a href="mailto:soumiaessabiry.se@gmail.com" target="_blank">Click here</a></td>
                            <td><a href="https://github.com/soumiaessabiry" target="_blank">Click here</a></td>
                        </tr>
                        <tr>
                            <td>Taha Doughmi</td>
                            <td><a href="mailto:tdourhmi2001@gmail.com" target="_blank">Click here</a></td>
                            <td><a href="https://github.com/devtaha2000" target="_blank">Click here</a></td>
                        </tr>

                        <tr>
                            <td>Yasser Elmahfoudi </td>
                            <td><a href="mailto:yasserelmahfoudi@gmail.com" target="_blank">Click here</a></td>
                            <td><a href="https://github.com/Skyseras" target="_blank">Click here</a></td>
                        </tr>
                        <tr>
                            <td>Zakaria Kerkazou</td>
                            <td><a href="mailto:kerkazou.zakaria@gmail.com" target="_blank">Click here</a></td>
                            <td><a href="https://github.com/kerkazou" target="_blank">Click here</a></td>
                        </tr>
                    </table>
                </div> -->


            </div>


        </div>



    </div>


    <script src="../js/app.js"></script>
    <script src="../js/list.js"></script>
    <script src="https://kit.fontawesome.com/65e1fe7a04.js" crossorigin="anonymous"></script>
</body>

</html>