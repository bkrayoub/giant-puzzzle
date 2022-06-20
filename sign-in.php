


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giant Puzzle | Sign In</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Luckiest+Guy&display=swap');
    </style>
    <link rel="stylesheet" href="style/sign-in-style.css">
</head>
<body>
    <div id="clouds">
        <img src="img/cloud.png" id="cloud-1" class="cloud" data-value="-5">
        <img src="img/cloud.png" id="cloud-2" class="cloud" data-value="3" onclick="cloud()">
        <img src="img/cloud-reverse.png" id="cloud-3" class="cloud" data-value="3">
        <img src="img/cloud.png" id="cloud-4" class="cloud" data-value="4">
        <img src="img/cloud-reverse.png" id="cloud-5" class="cloud" data-value="2">
    
    </div>
    <a href="index.php">
        <img src="img/exit.png">
    </a>
    <div id="game">


        <form action="" id="menu-form" method="POST">
  
            <p id="title">Sign In/Up</p>
            <lable id="user-name">
                <p>UserName</p>
                <input type="text" placeholder="player Name" name="user" id="gg"> 
            </lable>
            <lable id="user-password">
                <p>Password</p>
                <input type="password" placeholder="*********" name="pass">
            </lable>
            <a href="">
            <input type="submit" value="SIGN IN" id="sign-in-btn" name="submit">
            </a>
            <a href="sign-up.php">
            <input type="button" value="CREATE NEW ACCOUNT" id="create-new-account-btn">
            </a>
        </form>
    </div>
    <script type="text/javascript">
        // 




        // 
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
if (isset($_POST['submit'])){
    $name = $_POST["user"];
    $pass = $_POST["pass"];
    
    $sql = "SELECT * FROM player WHERE playername ='" . $name . "' AND  password ='" . $pass . "'" ;
    $result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
    session_start();
    $_SESSION['USER'] = $name;
    $_SESSION['PASSWORD'] = $pass;
    $_SESSION['LOGIN'] = true;

    header("location:index.php");

}
else {
    $_SESSION['LOGIN'] = false;
    echo "<script> 
    function signError(e){
        e.style.border = '3px #d10000 solid'
    }
    function log(){
        var in1 = document.querySelector('input[name=user]');
        var in2 = document.querySelector('input[name=pass]');
        
        signError(in1);
        signError(in2);
    }
    log()

    </script>";
}

}

?>