
<?php
    $phpconnect = mysqli_connect("localhost","root","","giant_puzzle");
    session_start();
    
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
    <p id="username"><?php if(isset($_SESSION['USER'])){echo $_SESSION['USER'];} else {echo "you're not connected";}; ?></p>
    <?php if(isset($_SESSION['USER'])){ echo '<img src="img/pfp.png"id="pfp">';} else{echo '<a href="sign-in.php"><img src="img/notconnected.png"id="notConnect""></a>';} ?>
    <div id="container">
        <div id="soduko">
            <div id="suduko-section">
            <input type='button' onclick='tile(this)' class='inps'>
            <input type='button' onclick='tile(this)' class='inps'>
            <input type='button' onclick='tile(this)' class='inps'>
            <input type='button' onclick='tile(this)' class='inps'>
            <input type='button' onclick='tile(this)' class='inps'>
            <input type='button' onclick='tile(this)' class='inps'>
            <input type='button' onclick='tile(this)' class='inps'>
            <input type='button' onclick='tile(this)' class='inps'>
            <input type='button' onclick='tile(this)' class='inps'>
            <input type='button' onclick='tile(this)' class='inps'>
            <input type='button' onclick='tile(this)' class='inps'>
            <input type='button' onclick='tile(this)' class='inps'>
            <input type='button' onclick='tile(this)' class='inps'>
            <input type='button' onclick='tile(this)' class='inps'>
            <input type='button' onclick='tile(this)' class='inps'>
            <input type='button' onclick='tile(this)' class='inps'>
            <input type='button' onclick='tile(this)' class='inps'>
            <input type='button' onclick='tile(this)' class='inps'>
            <input type='button' onclick='tile(this)' class='inps'>
            <input type='button' onclick='tile(this)' class='inps'>
            <input type='button' onclick='tile(this)' class='inps'>
            <input type='button' onclick='tile(this)' class='inps'>
            <input type='button' onclick='tile(this)' class='inps'>
            <input type='button' onclick='tile(this)' class='inps'>
            <input type='button' onclick='tile(this)' class='inps'>
            </div>
        </div>
        <div id="suduko-info">
            <img src="img/large-logo.png" alt="">
            <div id="selected-tile">
                <input type="button" value="" id="empty-tile">
            </div>
            <div id="timer">
                <div id="stopwatch">
                    <span>Timer: </span>
                    <div class="timerDisplay">
                        00 : 00 : 00 : 000
                     </div>
                </div>
                <div class="buttons">
                    <button id="startTimer" onclick="startGame()">Start</button>
                    <button id="resetTimer" disabled onclick="endGame()">Reset</button>
                  </div>
            </div>
        </div>
        <div id="suduko-select">
            <div id="suduko-select-section">

                <div id="num-tiles">
                    <input type="button" id="num-1" value="1">
                    <input type="button" id="num-2" value="3">
                    <input type="button" id="num-3" value="5">
                    <input type="button" id="num-4" value="7">
                    <input type="button" id="num-5" value="9">
                </div>
                <div id="color-tiles">
                    <input type="button" onclick="c1()" id="color-purple">
                    <input type="button" onclick="c2()" id="color-red">
                    <input type="button" onclick="c3()" id="color-yellow">
                    <input type="button" onclick="c4()" id="color-green">
                    <input type="button" onclick="c5()" id="color-blue">
                </div>
            </div>
        </div>
        <div id="howToPlay">
            <p>How to play</p>
            <div id="howToPlay-content">
                <p>The Giant Puzzle Arrange the pieces such that no number or color is repeated on any row, column or any diagonal. Also such that every row, column & the two major diagonals add to 25. Very difficult to solve</p>
            </div>
        </div>
    </div>
<script src="script/game1.js">
</script>
<script>
    gameStart = false;
    var inps = document.querySelectorAll('.inps')
    function endGame(){
        alert([seconds,minutes,hours])
        gameStart = false;

        for(i=0; i<=inps.length; i++){
            inps[i].value = '';
            inps[i].style.backgroundImage = ''
            inps[i].style.backgroundSize = emptyTile.style.backgroundSize;
            inps[i].style.boxShadow = '0px 0px 36px -1px rgba(255, 0, 0, 0.46), inset 0px 0px 13px 2px rgba(0, 0, 0, 0.84);'
        }
    }

    function startGame() {
        gameStart = true;
        if(gameStart){
       


        }
    }

                 // call numbers inputs
                 var n1 = document.getElementById('num-1'); 
            var n2 = document.getElementById('num-2'); 
            var n3 = document.getElementById('num-3'); 
            var n4 = document.getElementById('num-4'); 
            var n5 = document.getElementById('num-5'); 

            // call color inpputs
            var c1 = document.getElementById('color-purple');
            var c2 = document.getElementById('color-red');
            var c3 = document.getElementById('color-yellow');
            var c4 = document.getElementById('color-green');
            var c5 = document.getElementById('color-blue');

            //call empty input 
            var emptyTile = document.getElementById('empty-tile')

            // empetyt tile validation color and nuv value
            var numValid = 0;
            var colorValid = 0;


        
            // recopy values to empty tile
            n1.addEventListener('click', function(){
                emptyTile.value = n1.value;
                numValid++;
            });

            n2.addEventListener('click', function(){
                emptyTile.value = n2.value;
                numValid++;
            });

            n3.addEventListener('click', function(){
                emptyTile.value = n3.value;
                numValid++;
            });

            n4.addEventListener('click', function(){
                emptyTile.value = n4.value;
                numValid++;
            });

            n5.addEventListener('click', function(){
                emptyTile.value = n5.value;
                numValid++;
            });

            // recopy color to empty tile
            c1.addEventListener('click', function(){
                emptyTile.style.backgroundImage = "url('img/tiles/purpel.png')";
                emptyTile.style.backgroundSize = "cover";
                colorValid++
            });

            c2.addEventListener('click', function(){
                emptyTile.style.backgroundSize = "cover"
                emptyTile.style.backgroundImage = "url('img/tiles/red.png')";
                colorValid++

            });

            c3.addEventListener('click', function(){
                emptyTile.style.backgroundSize = "cover"
                emptyTile.style.backgroundImage = "url('img/tiles/yellow.png')";
                colorValid++

            });

            c4.addEventListener('click', function(){
                emptyTile.style.backgroundSize = "cover"
                emptyTile.style.backgroundImage = "url('img/tiles/green.png')";
                colorValid++

            });

            c5.addEventListener('click', function(){
                emptyTile.style.backgroundSize = "cover"
                emptyTile.style.backgroundImage = "url('img/tiles/blue.png')";
                colorValid++

            });

                            // recopy to main game table
                            function tile(e){
                if(!(numValid === 0 && colorValid === 0)){
                    e.value = emptyTile.value
                    e.style.backgroundImage = emptyTile.style.backgroundImage;
                    e.style.backgroundSize = emptyTile.style.backgroundSize;
                    e.style.boxShadow = '0px 0px 0px'

                }
    
            }
                                

</script>
</body>
</html>