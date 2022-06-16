
<?php
    $phpconnect = mysqli_connect("localhost","root","","giant_puzzle");
 
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giant Puzzle | pick a game</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Luckiest+Guy&display=swap');
    </style>
    <link rel="stylesheet" href="style/games-list.css">
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
    <div id="list-section">

        <section>
            <p>Pick a game</p>
            <form>
                <div>
                    <div class="avilable-game">
                        <a href="game1.php"><img src="img/levels_banner/25-num-color.png"></a>
                    </div>
                    <p>25 num & color</p>
                </div>
                <div>
                    <div class="levels">
                        <img src="img/levels_banner/locked.jpg">
                        <div class="hover-show">
                            <img src="img/levels_banner/locked-hovering.png" id="hovering-img">
                            <p>game locked</p>
                        </div>
                        
                    </div>
                    <p>Coming soon</p>
                </div>


            </form>
        </section>
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