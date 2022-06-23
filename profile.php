<?php 
include 'connection.php';
    session_start();
    // get sessions
    
    // create user informaitions variables
    $user_id = $_SESSION['ID'];
    $user_name = $_SESSION['USER'];
    $user_email = $_SESSION['EMAIL'];
    $games = "SELECT COUNT('player_id') FROM score WHERE player_id = $user_id" ;
    $resulta = mysqli_query($conn,$games);
    $row = mysqli_fetch_assoc($resulta);

?>
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
                <div id="banner">
                    <p id="userTitle"><?php echo $user_name ?></p>
                    <p id="uid">user id: <input type="button" value="<?php echo $user_id;?>" id="uesr_id" disabled><img src="img/copy.png" id="copy" onclick="copyBtn()"></span> </p>

                </div>
                <div id="info">
                    <p id="email"><?php echo $user_email; ?></p>
                    <p id="games">Wins: <?php echo $row["COUNT('player_id')"]; ?></p>
                </div>
                <div id="btns">
                    <input type="submit" id="logout-btn" value="Log out" name="logout">
                    <input type="submit" id="delete-btn" value="delete account" onclick="return confirm('You about to delete your account! are you sure?')" name="delete">
                </div>
            
                
            </form>
        </div>
        <script type="text/javascript">
            // copy id to clipboard
            function copyBtn() {
                var copyText = document.getElementById("uesr_id");

                navigator.clipboard.writeText(copyText.value);
                
            }
            // move background elements while hovering
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