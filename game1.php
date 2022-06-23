<!-- INCLUDE AN START SESSION -->
<?php
include 'connection.php';
    $phpconnect = mysqli_connect("localhost","root","","giant_puzzle");
    session_start();
    if(isset($_SESSION['USER'])){
        $userId = $_SESSION['ID'];
    }
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
<!-- popup form -->
<style>
        #popup {
            transition: .33s ease-out;
            top: -50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: #F6F6F6;
            border-radius: 20px;
            box-shadow: 0px 0px 36px -1px rgba(53, 53, 53, 0.46);
            position: absolute;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-around;
            font-size: 25px;
            width: 700px;
            height: 400px;
            z-index: 10;
            

        }
        #popup input {
            border: 0px;
        }
        #popup input[type=text]{
            background-color: transparent;
            font-size: 25px;
            text-align: center;
        }
        #popup input[type=button]{
            background-color: brown;
            height: 50px;
            width: 120px;
            border-radius: 20px;
        }
        #popup input[type=submit]{
            background-color: rgb(88, 232, 72);
            height: 50px;
            width: 120px;
            border-radius: 20px;
        }
    </style>
    <form method="POST" id="popup">
        <span>Your time spent is:</span><input type="text" id="recopy_time" name="timeSpent">
        <p>you want to save this game?</p>
        <div>
        <input type="submit" value="SAVE" name="save">
        <input type="button" value="cancel" onclick="backToMenu()">
        </div>
    </form>
<!-- pop up for end -->

<!-- INSERT SCORE TO DATABASE, TABLE 'score' -->
<?php
if(isset($_SESSION['USER'])){
    if(isset($_POST['save'])){
        $dateTime = date('Y-m-d H:i:s');
        $leveId = $_GET['level'];
        $timeSpent = $_POST['timeSpent'];
        $sql_score = "INSERT INTO `score` (`player_id`, `level_id`, `date`, `time_spent`) VALUES ($userId, $leveId, '$dateTime', '$timeSpent')";
        mysqli_query($conn, $sql_score);

    }
    else {
        echo '<script>alert("You have to connect your account for saving score") </script>';
    } 
}

?>

<div id="lastRecord"><span>your last recored time is : <input type="button" value="" id="timeSpent"></span></div>
<!-- EXIT BUTTON -->
<a onclick="backToMenu()">
    <img src="img/exit.png" alt="go back" id="go-back">
</a>
<!-- DISPLAY USER NAME ELSE DISPLAY YOU'RE CONNECTED MESSAGE -->
<p id="username"><?php if(isset($_SESSION['USER'])){echo $_SESSION['USER'];} else {echo "you're not connected";}; ?></p>
<?php if(isset($_SESSION['USER'])){ echo '<img src="img/pfp.png"id="pfp">';} else{echo '<a href="sign-in.php"><img src="img/notconnected.png"id="notConnect""></a>';} ?>

<!-- SUDUKO FIELD -->
<div id="container">
    <button onclick="fill()">fill</button>
    <button onclick="testVal()">test</button>
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
    <!-- GAME INFO SECTION -->
    <div id="suduko-info">
        <img src="img/large-logo.png" alt="">
        <div id="selected-tile">
            <input type="button" value="" id="empty-tile" onclick="clearOnes()">
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
                <button id="resetTimer" disabled onclick="endGame()">leave party</button>
                </div>
        </div>
    </div>

    <!-- SELECT COLORS AND NUMBERS BAR -->

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

    <!-- HOW TO PLAY DIV -->

    <div id="howToPlay">
        <p>How to play</p>
        <div id="howToPlay-content">
            <p>The Giant Puzzle Arrange the pieces such that no number or color is repeated on any row, column or any diagonal. Also such that every row, column & the two major diagonals add to 25. Very difficult to solve</p>
        </div>
    </div>
</div>

<!-- SCRIPT OF THE SUDOKO LOGIC AND TIMER -->

<script src="script/game1.js">
</script>

<!-- SCRIPT OF GAMEPLAY AND CONTROLE AND MORE -->
<script>
    gameStart = false;

    var inps = document.querySelectorAll('.inps')

    // BUTTON WHO END THE GAME PARTY
    function endGame(){
        // DISPLAY POPUP
        alert([milliseconds,seconds,minutes,hours])
        var confirmFoem = document.getElementById('popup');
        confirmFoem.style.top = '50%'

        // DISPLAY TIME
        document.getElementById('timeSpent').value = [seconds,minutes,hours]
        document.getElementById('recopy_time').value = [seconds,minutes,hours]
        gameStart = false;

        // UNFILL TILES
        for(i=0; i<=inps.length; i++){
            inps[i].value = '';
            inps[i].style.backgroundImage = '';
            inps[i].style.backgroundSize = emptyTile.style.backgroundSize;
            emptyTile.value = '';
            emptyTile.style.backgroundImage = '';
            emptyTile.style.backgroundSize = emptyTile.style.backgroundSize;
        }
    }
    // CLEAR THE CHARGER TILE
    function clearOnes(){
        emptyTile.value = '';
            emptyTile.style.backgroundImage = '';
            emptyTile.style.backgroundSize = emptyTile.style.backgroundSize;
    }

    // BUTTON START GAME
    function startGame() {

        // UNFILL TILES
        for(i=0; i<=inps.length; i++){
            inps[i].value = '';
            inps[i].style.backgroundImage = '';
            inps[i].style.backgroundSize = emptyTile.style.backgroundSize;
            emptyTile.value = '';
            emptyTile.style.backgroundImage = '';
            emptyTile.style.backgroundSize = emptyTile.style.backgroundSize;
        }
        gameStart = true;
    }

    // exit the game btn 
    function backToMenu() {
        if(confirm('you want exit the party?')){
            window.location.href='choose-game.php'
        }
        else{
            gameStart = true;

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

        }

    }
                                

</script>
</body>
</html>