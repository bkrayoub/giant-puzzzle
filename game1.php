
<?php
    $phpconnect = mysqli_connect("localhost","root","","giant_puzzle");
 
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Luckiest+Guy&display=swap');
    </style>
    <link rel="stylesheet" href="style\game-1.css">
    <title>Giant Puzzle | 25 num & color</title>
</head>
<body>
    <a href="index.php">
        <img src="img/exit.png" alt="go back" id="go-back">
    </a>
    <div id="container">
        <div id="soduko">
            <div id="suduko-section">
              <input type="button">
              <input type="button">
              <input type="button">
              <input type="button">
              <input type="button">
              <input type="button">
              <input type="button">
              <input type="button">
              <input type="button">
              <input type="button">
              <input type="button">
              <input type="button">
              <input type="button">
              <input type="button">
              <input type="button">
              <input type="button">
              <input type="button">
              <input type="button">
              <input type="button">
              <input type="button">
              <input type="button">
              <input type="button">
              <input type="button">
              <input type="button">
              <input type="button">  
            </div>
        </div>
        <div id="suduko-info">
            <img src="img/large-logo.png" alt="">
            <div id="selected-tile">
                <input type="button" value="">
            </div>
            <div id="timer">
                <div id="stopwatch">
                    <span>Timer: </span>
                    <div class="timerDisplay">
                        00 : 00 : 00 : 000
                     </div>
                </div>
                <div class="buttons">
                    <button id="startTimer">Start</button>
                    <button id="resetTimer" disabled >Reset</button>
                  </div>
            </div>
        </div>
        <div id="suduko-select">
            <div id="suduko-select-section">

                <div id="num-tiles">
                    <input type="button" id="num-1" value="1">
                    <input type="button" id="num-3" value="3">
                    <input type="button" id="num-5" value="5">
                    <input type="button" id="num-7" value="7">
                    <input type="button" id="num-9" value="9">
                </div>
                <div id="color-tiles">
                    <input type="button" id="color-purple" style="background-image: url(/img/tiles/purpel.png); background-size: cover;">
                    <input type="button" id="color-red" style="background-image: url(/img/tiles/red.png); background-size: cover;">
                    <input type="button" id="color-yellow" style="background-image: url(/img/tiles/yellow.png); background-size: cover;">
                    <input type="button" id="color-green" style="background-image: url(/img/tiles/green.png); background-size: cover;">
                    <input type="button" id="color-blue" style="background-image: url(/img/tiles/blue.png); background-size: cover;">
                </div>
            </div>
        </div>
    </div>
<script src="script/game1.js">
</script>
</body>
</html>