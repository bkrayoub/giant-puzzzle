
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giant Puzzle | Sign Up</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Luckiest+Guy&display=swap');
    </style>
    <link rel="stylesheet" href="style/sign-up-style.css">
</head>
<body>
    <div id="clouds">
    <img src="img/cloud.png" id="cloud-1" class="cloud" data-value="-5">
        <img src="img/cloud.png" id="cloud-2" class="cloud" data-value="3">
        <img src="img/cloud-reverse.png" id="cloud-3" class="cloud" data-value="3">
        <img src="img/cloud.png" id="cloud-4" class="cloud" data-value="4">
        <img src="img/cloud-reverse.png" id="cloud-5" class="cloud" data-value="2">
    
    </div>
    <a href="index.php">
        <img src="img/exit.png">
    </a>
    <div id="game">


        <form action="" id="menu-form" method="POST">
  
            <div id="user-pfp">
                <img src="img/pfp.png" alt="">
            </div>
            <input type="submit" value="Log out" name="logout">
            <input type="submit" value="delet account" onclick="return confirm('You about to delete your account! are you sure?')" name="delete">
        
            
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
include "connection.php";
session_start();



$user_id = $_SESSION['ID'];


if(isset($_POST['delete'])){
    $sql = "DELETE FROM `player` WHERE player_id = $user_id ";
    $result = mysqli_query($conn,$sql);
    session_unset();
    session_destroy();
    header("location:index.php");
}

if(isset($_POST["logout"])){
    session_unset();
    session_destroy();
    header("location:index.php");
}



?>