
<?php
    $phpconnect = mysqli_connect("localhost","root","","giant_puzzle");
 
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="widscoreboard.cssth=device-width, initial-scale=1.0">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Luckiest+Guy&display=swap');
    </style>
    <link rel="stylesheet" href="style/scoreboard.css">
    <title>Giant Puzzle | Scoreboard</title>
</head>

<body>

    <div class="background">
        <img src="img/scoreboard-imgs/rocket.png" class="background-elements" data-value="10" id="img1">
        <img src="img/scoreboard-imgs/bmo.png" class="background-elements" data-value="-1" id="img2">
        <img src="img/scoreboard-imgs/time.png" class="background-elements" data-value="4" id="img3">
        <img src="img/scoreboard-imgs/copa.png" class="background-elements" data-value="4" id="img4">
        <img src="img/scoreboard-imgs/controler.png" class="background-elements" data-value="3" id="img5">
    </div>

    <a href="index.php">
        <img src="img/exit.png" alt="go back" id="go-back">
    </a>

    <div id="title">
        <h1>Scoreboard</h1>
    </div>

    <div id="container">
        
        <div id="rank-box">
            <div id="rank-img">
                <img src="img/pfp.png">
            </div>
            <p id="userID">USER ID</p>
            <p id="username">USER NAME</p>
            <p id="time-spent">00:15:04</p>
            <p id="rank">1</p>
        </div>
        
        <div id="rank-box">
            <div id="rank-img">
                <img src="img/pfp.png">
            </div>
            <p id="userID">USER ID</p>
            <p id="username">USER NAME</p>
            <p id="time-spent">00:15:04</p>
            <p id="rank">1</p>
        </div>
        
        <div id="rank-box">
            <div id="rank-img">
                <img src="img/pfp.png">
            </div>
            <p id="userID">USER ID</p>
            <p id="username">USER NAME</p>
            <p id="time-spent">00:15:04</p>
            <p id="rank">1</p>
        </div>
        
        <div id="rank-box">
            <div id="rank-img">
                <img src="img/pfp.png">
            </div>
            <p id="userID">USER ID</p>
            <p id="username">USER NAME</p>
            <p id="time-spent">00:15:04</p>
            <p id="rank">1</p>
        </div>
        <div id="rank-box">
            <div id="rank-img">
                <img src="img/pfp.png">
            </div>
            <p id="userID">USER ID</p>
            <p id="username">USER NAME</p>
            <p id="time-spent">00:15:04</p>
            <p id="rank">1</p>
        </div>        <div id="rank-box">
            <div id="rank-img">
                <img src="img/pfp.png">
            </div>
            <p id="userID">USER ID</p>
            <p id="username">USER NAME</p>
            <p id="time-spent">00:15:04</p>
            <p id="rank">1</p>
        </div>
        <div id="rank-box">
            <div id="rank-img">
                <img src="img/pfp.png">
            </div>
            <p id="userID">USER ID</p>
            <p id="username">USER NAME</p>
            <p id="time-spent">00:15:04</p>
            <p id="rank">1</p>
        </div>
        <div id="rank-box">
            <div id="rank-img">
                <img src="img/pfp.png">
            </div>
            <p id="userID">USER ID</p>
            <p id="username">USER NAME</p>
            <p id="time-spent">00:15:04</p>
            <p id="rank">1</p>
        </div>
    </div>








    <script type="text/javascript">
        document.addEventListener("mousemove", parallax);
        function parallax(e){
            document.querySelectorAll(".background-elements").forEach(function(move){

                var moving_value = move.getAttribute("data-value");
                var x = (e.clientX * moving_value) / 150;
                var y = (e.clientY * moving_value) / 150;

                move.style.transform = "translateX(" + x + "px) translateY(" + y + "px)";
            
            });
            }
    </script>
</body>
</html>