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
    <div class="container">
        <h1>Rock Scissor Paper</h1>
        <form method="POST">
            <input type="text" name="player" style="height:30px; width:180px; border-radius:30px; border: 1px solid gray; oultine: none; padding-left:10px; " />
            <input type="submit" name="submit" style="height: 35px; width:60px; border-radius:30px; border:1px solid gray" />
        </form>
        <div>
            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                $player = $_POST['player'];
                $computer = rand(1, 3);
                // 1 rock // 2 Scissor  // 3 paper 
                if (($player == 1 and $computer == 1) ||  ($player == 2 && $computer == 2)  || ($player == 3 && $computer == 3)) {
                    echo "
                    <div style='height:20px;margin-top: 10px ; display:flex; margin-right: 50px; ; align-items:center;'>
                        <img src='img/rock1.png'/>
                        <img src='img/rock2.png'/>
                    </div>
                    <div><span style='margin-right: 10px;'>Player</span><span>Computer</span></div> 
                    <div><h1 style='color:gray;'>the match is draw<h1></div>";
                } elseif ($player == 1 and $computer == 2) {
                    echo
                    "
                <div style='height:20px;margin-top: 10px ; display:flex; margin-right: 50px; ; align-items:center;'>
                    <img src='img/rock1.png'/>
                    <img src='img/scissor2.png'/>
                </div>
                <div><span style='margin-right: 10px;'>Player</span><span>Computer</span></div> 
                <div><h1 style='color:green;'>You won<h1></div>";
                } elseif ($player == 1 and $computer == 3) {
                    echo "
                <div style='height:20px;margin-top: 10px ; display:flex; margin-right: 50px; ; align-items:center;'>
                    <img src='img/rock1.png'/>
                    <img src='img/paper2.png'/>
                </div>
                <div><span style='margin-right: 10px;'>Player</span><span>Computer</span></div> 
                <div><h1 style='color:red;'>You Lost<h1></div>";
                } elseif ($player == 2 and $computer == 1) {
                    echo "
                <div style='height:20px;margin-top: 10px ; display:flex; margin-right: 50px; ; align-items:center;'>
                    <img src='img/scissor1.png'/>
                    <img src='img/rock2.png'/>
                </div>
                <div><span style='margin-right: 10px;'>Player</span><span>Computer</span></div> 
                <div><h1 style='color:red;'>You Lost<h1></div>";
                } elseif ($player == 2 and  $computer == 3) {
                    echo "
                <div style='height:20px;margin-top: 10px ; display:flex; margin-right: 50px; ; align-items:center;'>
                    <img src='img/scissor1.png'/>
                    <img src='img/paper2.png'/>
                </div>
                <div><span style='margin-right: 10px;'>Player</span><span>Computer</span></div> 
                <div><h1 style='color:green;'>You won<h1></div>";
                } elseif ($player == 3 and $computer == 1) {
                    echo "
                <div style='height:20px;margin-top: 10px ; display:flex; margin-right: 50px; ; align-items:center;'>
                    <img src='img/paper1.png'/>
                    <img src='img/rock2.png'/>
                </div>
                <div><span style='margin-right: 10px;'>Player</span><span>Computer</span></div> 
                <div><h1 style='color:green;'>You won<h1></div>";
                } elseif ($player == 3 and $computer == 2) {
                    echo "
                <div style='height:20px;margin-top: 10px ; display:flex; margin-right: 50px; ; align-items:center;'>
                    <img src='img/paper1.png'/>
                    <img src='img/scissor2.png'/>
                </div>
                <div><span style='margin-right: 10px;'>Player</span><span>Computer</span></div> 
                <div><h1 style='color:red;'>You Lost<h1></div>";
                } else {
                    echo "enter a valid number";
                }
            }
            ?>
        </div>
    </div>
</body>


</html>