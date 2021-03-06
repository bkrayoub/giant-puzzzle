


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giant Puzzle | Main Menu</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Luckiest+Guy&display=swap');
    </style>
    <link rel="stylesheet" href="style/home-style.css">
</head>
<body>
    <div id="game">
        <div id="clouds">
            <img src="img/cloud.png" id="cloud-1" class="cloud" data-value="5">
            <img src="img/cloud.png" id="cloud-2" class="cloud" data-value="3">
            <img src="img/cloud-reverse.png" id="cloud-3" class="cloud" data-value="3">
            <img src="img/cloud.png" id="cloud-4" class="cloud" data-value="4">
            <img src="img/cloud-reverse.png" id="cloud-5" class="cloud" data-value="2">
        
        </div>
        <form action="" id="menu-fram">
            <img src="img/large-logo.png" alt="" width="372px">

                <a href="choose-game.php">
                    <input type="button" value="PLAY" style="margin-top: 130px;">
                </a>
                <?php
                session_start();
                if(isset($_SESSION['USER']) && isset($_SESSION['ID'])){
                    echo '<a href="profile.php" id="id-profile">
                    <input type="button" value="profile" id="profile" onclick="cnx()" name="connection">
                </a>';
                }
                else {
                    echo '<a href="sign-in.php" id="id-profile">
                    <input type="button" value="connection" id="profile" onclick="cnx()" name="connection">
                </a>';
                }

                ?>               
                <a href="scoreboard.php">
                    <input type="button" value="SCOREBOARD">
                </a>
                <a href="">
                    <input type="button" value="HOW TO PLAY">
                </a>
                <a href="credit.php">
                    <input type="button" value="CREDIT">
                </a>
        </form>
    </div>
    <script type="text/javascript">

        document.addEventListener("mousemove", parallax);
        function parallax(e){
            document.querySelectorAll(".cloud").forEach(function(move){

                var moving_value = move.getAttribute("data-value");
                var x = (e.clientX * moving_value) / 150;
                var y = (e.clientY * moving_value) / 150;

                move.style.transform = "translateX(" + x + "px) translateY(" + y + "px)";
                
            
            });
        }
    </script>
</body>
</html>


<?php





    // echo "<script> 
    //  document.getElementById('profile').value = 'profile';
    // </script>";
    //     echo "<script> 
    //     document.getElementById('profile').value = 'connection';
    //    </script>";





?>
