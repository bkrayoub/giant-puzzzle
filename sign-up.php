
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
    <a href="sign-in.php">
        <img src="img/exit.png">
    </a>
    <div id="game">


        <form method="POST" id="menu-form" actoin="">
  
            <div id="user-pfp">
                <img src="img/pfp.png" alt="">
            </div>
        
            <lable id="user-name">
                <p>User Name</p>
                <input type="text" placeholder="player Name" name="userName"> 
            </lable>
            <lable id="email">
                <p>Email</p>
                <input type="text" placeholder="name-text@pmail.com" name="email">
            </lable>
            <lable id="user-password">
                <p>Password</p>
                <input type="password" placeholder="*********" name="password">
            </lable>
            <a href="">
                <input type="submit" value="Regester" id="create-new-account-btn" name="submit">
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
<?php include 'connection.php'?>

<?php

// validation sign in 
    if(isset($_POST["submit"])){

        $userName = $_POST["userName"];

        $email = $_POST["email"];

        $pass = $_POST["password"];

        $sql = "INSERT INTO `player` (`playername`, `email`, `password`) VALUES ('$userName', '$email', '$pass')";
        $result = mysqli_query($conn,$sql);

        if($result){
            echo "
                <script>
                    alert('hi')
                </script>
            ";
        }

        // validation_inputs

        // if(!preg_match('/[a-zA-Z]{3,25}/', $userName)){
        //     $err_username = "first name must be 3 or more characters";
        //     $err_valid++;
        // }

        // if(!preg_match('/([a-zA-Z0-9]{4,})@gmail\.com/', $email)){
        //     $err_email = "invalid email";
        //     $err_valid++;
        // }

        // if(!preg_match('/[a-zA-Z0-9]{8,}/', $pass)){
        //     $err_pass = "password must be 8 or more characters";
        //     $err_valid++;
        // }

        // if($confirm_pass != $pass){
        //     $err_confirm_pass = "doesn't match the password!";
        //     $err_valid++;
        // }

        // insert into database 

            



    }   

?>
