// game start event
// timer
let [milliseconds,seconds,minutes,hours] = [0,0,0,0];
let timerRef = document.querySelector('.timerDisplay');
let int = null;

document.getElementById('startTimer').addEventListener('click', ()=>{

    if(int!==null){
        clearInterval(int);
    }
    gameStart = true;
    int = setInterval(displayTimer,10);
    document.getElementById('resetTimer').removeAttribute('disabled')

});

document.getElementById('resetTimer').addEventListener('click', ()=>{
    if(confirm('you want to stop the game? click cancel if you want to continue') === true){
        clearInterval(int);
        [milliseconds,seconds,minutes,hours] = [0,0,0,0];
        timerRef.innerHTML = '00 : 00 : 00 : 000 ';
        gameStart = false
    }
    else{
        console.log("unconfirmed")
    }

});

function displayTimer(){
    milliseconds+=10;
    if(milliseconds == 1000){
        milliseconds = 0;
        seconds++;
        if(seconds == 60){
            seconds = 0;
            minutes++;
            if(minutes == 60){
                minutes = 0;
                hours++;
            }
        }
    }

let h = hours < 10 ? "0" + hours : hours;
let m = minutes < 10 ? "0" + minutes : minutes;
let s = seconds < 10 ? "0" + seconds : seconds;
let ms = milliseconds < 10 ? "00" + milliseconds : milliseconds < 100 ? "0" + milliseconds : milliseconds;

timerRef.innerHTML = ` ${h} : ${m} : ${s} : ${ms}`;




// 


}
// gameplay script
var inputs = document.querySelectorAll("#suduko-section input");

function fill(){
    for(i=0 ; i<25 ; i++){
        inputs[i].value = i;
    }
}
    
function testVal(){

   while(gameStart == true){
     // var take error for validate
     errFound = 0;

     // test input 1
     if(inputs[0].value == inputs[1].value || inputs[0].value == inputs[2].value || inputs[0].value == inputs[3].value || inputs[0].value == inputs[4].value || inputs[0].value == inputs[5].value || inputs[0].value == inputs[6].value || inputs[0].value == inputs[10].value || inputs[0].value == inputs[12].value || inputs[0].value == inputs[15].value || inputs[0].value == inputs[18].value || inputs[0].value == inputs[20].value || inputs[0].value == inputs[24].value){
         errFound++
     }
 
     // test input 2
     if(inputs[1].value == inputs[0].value || inputs[1].value == inputs[2].value || inputs[1].value == inputs[3].value || inputs[1].value == inputs[4].value || inputs[1].value == inputs[5].value || inputs[1].value == inputs[6].value || inputs[1].value == inputs[7].value || inputs[1].value == inputs[11].value || inputs[1].value == inputs[13].value || inputs[1].value == inputs[16].value || inputs[1].value == inputs[19].value || inputs[1].value == inputs[21].value){
         errFound++
     }
 
     // test input 3
     if(inputs[2].value == inputs[0].value || inputs[2].value == inputs[1].value || inputs[2].value == inputs[3].value || inputs[2].value == inputs[4].value || inputs[2].value == inputs[6].value || inputs[2].value == inputs[7].value || inputs[2].value == inputs[8].value || inputs[2].value == inputs[10].value || inputs[2].value == inputs[12].value || inputs[2].value == inputs[14].value || inputs[2].value == inputs[17].value || inputs[2].value == inputs[22].value){
         errFound++
     }
 
     // test input 4
     if(inputs[3].value == inputs[0].value || inputs[3].value == inputs[1].value || inputs[3].value == inputs[2].value || inputs[3].value == inputs[4].value || inputs[3].value == inputs[7].value || inputs[3].value == inputs[8].value || inputs[3].value == inputs[9].value || inputs[3].value == inputs[11].value || inputs[3].value == inputs[13].value || inputs[3].value == inputs[15].value || inputs[3].value == inputs[18].value || inputs[3].value == inputs[23].value){
         errFound++
     }
 
     // test input 5
     if(inputs[4].value == inputs[0].value || inputs[4].value == inputs[1].value || inputs[4].value == inputs[2].value || inputs[4].value == inputs[3].value || inputs[4].value == inputs[8].value || inputs[4].value == inputs[9].value || inputs[4].value == inputs[12].value || inputs[4].value == inputs[14].value || inputs[4].value == inputs[16].value || inputs[4].value == inputs[19].value || inputs[4].value == inputs[20].value || inputs[4].value == inputs[24].value){
         errFound++
     }
 
     // test input 6
     if(inputs[5].value == inputs[1].value || inputs[5].value == inputs[6].value || inputs[5].value == inputs[7].value || inputs[5].value == inputs[8].value || inputs[5].value == inputs[9].value || inputs[5].value == inputs[10].value || inputs[5].value == inputs[11].value || inputs[5].value == inputs[15].value || inputs[5].value == inputs[17].value || inputs[5].value == inputs[20].value || inputs[5].value == inputs[23].value || inputs[5].value == inputs[0].value){
             errFound++
         }
 
     // test input 7
     if(inputs[6].value == inputs[0].value || inputs[6].value == inputs[1].value || inputs[6].value == inputs[2].value || inputs[6].value == inputs[5].value || inputs[6].value == inputs[7].value || inputs[6].value == inputs[8].value || inputs[6].value == inputs[9].value || inputs[6].value == inputs[10].value || inputs[6].value == inputs[11].value || inputs[6].value == inputs[12].value || inputs[6].value == inputs[16].value || inputs[6].value == inputs[18].value || inputs[6].value == inputs[21].value || inputs[6].value == inputs[23].value){
         errFound++
     }
 
     // test input 8
     if(inputs[7].value == inputs[1].value || inputs[7].value == inputs[2].value || inputs[7].value == inputs[3].value || inputs[7].value == inputs[5].value || inputs[7].value == inputs[6].value || inputs[7].value == inputs[8].value || inputs[7].value == inputs[9].value || inputs[7].value == inputs[11].value || inputs[7].value == inputs[12].value || inputs[7].value == inputs[13].value || inputs[7].value == inputs[15].value || inputs[7].value == inputs[17].value || inputs[7].value == inputs[19].value || inputs[7].value == inputs[22].value){
         errFound++
     }
     // test input 9
     if(inputs[8].value == inputs[2].value || inputs[8].value == inputs[3].value || inputs[8].value == inputs[4].value || inputs[8].value == inputs[5].value || inputs[8].value == inputs[7].value || inputs[8].value == inputs[9].value || inputs[8].value == inputs[12].value || inputs[8].value == inputs[13].value || inputs[8].value == inputs[14].value || inputs[8].value == inputs[16].value || inputs[8].value == inputs[18].value || inputs[8].value == inputs[20].value || inputs[8].value == inputs[23].value){
     
         errFound++
     }
     // test input 10
     if(inputs[9].value == inputs[3].value || inputs[9].value == inputs[4].value || inputs[9].value == inputs[5].value || inputs[9].value == inputs[6].value || inputs[9].value == inputs[7].value || inputs[9].value == inputs[8].value || inputs[9].value == inputs[13].value || inputs[9].value == inputs[14].value || inputs[9].value == inputs[17].value || inputs[9].value == inputs[19].value || inputs[9].value == inputs[21].value || inputs[9].value == inputs[24].value){
         errFound++
     }
      // test input 11--
      if(inputs[10].value == inputs[0].value || inputs[10].value == inputs[2].value || inputs[10].value == inputs[5].value || inputs[10].value == inputs[6].value || inputs[10].value == inputs[11].value || inputs[10].value == inputs[12].value || inputs[10].value == inputs[13].value || inputs[10].value == inputs[14].value || inputs[10].value == inputs[15].value || inputs[10].value == inputs[16].value || inputs[10].value == inputs[20].value || inputs[10].value == inputs[22].value){
     
         errFound++
     }   
     // test input 12
     if(inputs[11].value == inputs[1].value || inputs[11].value == inputs[3].value || inputs[11].value == inputs[5].value || inputs[11].value == inputs[6].value || inputs[11].value == inputs[7].value || inputs[11].value == inputs[10].value || inputs[11].value == inputs[12].value || inputs[11].value == inputs[13].value || inputs[11].value == inputs[14].value || inputs[11].value == inputs[15].value || inputs[11].value == inputs[16].value || inputs[11].value == inputs[17].value || inputs[11].value == inputs[21].value || inputs[11].value == inputs[23].value){
     
         errFound++
     }
     // test input 
     if(inputs[12].value == inputs[0].value || inputs[12].value == inputs[2].value || inputs[12].value == inputs[4].value || inputs[12].value == inputs[6].value || inputs[12].value == inputs[7].value || inputs[12].value == inputs[8].value || inputs[12].value == inputs[10].value || inputs[12].value == inputs[11].value || inputs[12].value == inputs[13].value || inputs[12].value == inputs[14].value || inputs[12].value == inputs[16].value || inputs[12].value == inputs[17].value || inputs[12].value == inputs[18].value || inputs[12].value == inputs[20].value || inputs[12].value == inputs[22].value || inputs[12].value == inputs[24].value){
     
         errFound++
     }
     // test input 
         if(inputs[13].value == inputs[1].value || inputs[13].value == inputs[3].value || inputs[13].value == inputs[7].value || inputs[13].value == inputs[8].value || inputs[13].value == inputs[9].value || inputs[13].value == inputs[10].value || inputs[13].value == inputs[11].value || inputs[13].value == inputs[12].value || inputs[13].value == inputs[14].value || inputs[13].value == inputs[17].value || inputs[13].value == inputs[18].value || inputs[13].value == inputs[19].value || inputs[13].value == inputs[21].value || inputs[13].value == inputs[23].value){
         
         errFound++
     }
     // test input 
     if(inputs[14].value == inputs[2].value || inputs[14].value == inputs[4].value || inputs[14].value == inputs[8].value || inputs[14].value == inputs[9].value || inputs[14].value == inputs[10].value || inputs[14].value == inputs[11].value || inputs[14].value == inputs[12].value || inputs[14].value == inputs[13].value || inputs[14].value == inputs[18].value || inputs[14].value == inputs[19].value || inputs[14].value == inputs[22].value || inputs[14].value == inputs[24].value){
     
         errFound++
     }
     // test input 
     if(inputs[15].value == inputs[0].value || inputs[15].value == inputs[3].value || inputs[15].value == inputs[5].value || inputs[15].value == inputs[7].value || inputs[15].value == inputs[10].value || inputs[15].value == inputs[11].value || inputs[15].value == inputs[16].value || inputs[15].value == inputs[17].value || inputs[15].value == inputs[18].value || inputs[15].value == inputs[19].value || inputs[15].value == inputs[20].value || inputs[15].value == inputs[21].value){
         errFound++
     }
     // test input 
     if(inputs[16].value == inputs[1].value || inputs[16].value == inputs[4].value || inputs[16].value == inputs[6].value || inputs[16].value == inputs[8].value || inputs[16].value == inputs[10].value || inputs[16].value == inputs[11].value || inputs[16].value == inputs[12].value || inputs[16].value == inputs[15].value || inputs[16].value == inputs[17].value || inputs[16].value == inputs[18].value || inputs[16].value == inputs[19].value || inputs[16].value == inputs[20].value || inputs[16].value == inputs[21].value || inputs[16].value == inputs[22].value){
         errFound++
     }
     // test input 
     if(inputs[17].value == inputs[2].value || inputs[17].value == inputs[5].value || inputs[17].value == inputs[7].value || inputs[17].value == inputs[9].value || inputs[17].value == inputs[11].value || inputs[17].value == inputs[12].value || inputs[17].value == inputs[13].value || inputs[17].value == inputs[15].value || inputs[17].value == inputs[16].value || inputs[17].value == inputs[18].value || inputs[17].value == inputs[19].value || inputs[17].value == inputs[21].value || inputs[17].value == inputs[22].value || inputs[17].value == inputs[23].value){
         errFound++
     }
     // test input 
     if(inputs[18].value == inputs[0].value || inputs[18].value == inputs[3].value || inputs[18].value == inputs[6].value || inputs[18].value == inputs[8].value || inputs[18].value == inputs[12].value || inputs[18].value == inputs[13].value || inputs[18].value == inputs[14].value || inputs[18].value == inputs[15].value || inputs[18].value == inputs[16].value || inputs[18].value == inputs[17].value || inputs[18].value == inputs[19].value || inputs[18].value == inputs[22].value || inputs[18].value == inputs[23].value || inputs[18].value == inputs[24].value){
         errFound++
     }
     // test input 20
     if(inputs[19].value == inputs[1].value || inputs[19].value == inputs[4].value || inputs[19].value == inputs[7].value || inputs[19].value == inputs[9].value || inputs[19].value == inputs[13].value || inputs[19].value == inputs[14].value || inputs[19].value == inputs[15].value || inputs[19].value == inputs[16].value || inputs[19].value == inputs[17].value || inputs[19].value == inputs[18].value || inputs[19].value == inputs[23].value || inputs[19].value == inputs[24].value){
         errFound++
     }
     // test input 21
     if(inputs[20].value == inputs[0].value || inputs[20].value == inputs[4].value || inputs[20].value == inputs[5].value || inputs[20].value == inputs[8].value || inputs[20].value == inputs[10].value || inputs[20].value == inputs[12].value || inputs[20].value == inputs[15].value || inputs[20].value == inputs[16].value || inputs[20].value == inputs[21].value || inputs[20].value == inputs[22].value || inputs[20].value == inputs[23].value || inputs[20].value == inputs[24].value){
         errFound++
     }
     // test input 22
     if(inputs[21].value == inputs[1].value || inputs[21].value == inputs[6].value || inputs[21].value == inputs[9].value || inputs[21].value == inputs[11].value || inputs[21].value == inputs[13].value || inputs[21].value == inputs[15].value || inputs[21].value == inputs[16].value || inputs[21].value == inputs[17].value || inputs[21].value == inputs[20].value || inputs[21].value == inputs[22].value || inputs[21].value == inputs[12].value || inputs[21].value == inputs[14].value){
         errFound++
     }
     // test input 23
     if(inputs[22].value == inputs[2].value || inputs[22].value == inputs[7].value || inputs[22].value == inputs[10].value || inputs[22].value == inputs[12].value || inputs[22].value == inputs[14].value || inputs[22].value == inputs[16].value || inputs[22].value == inputs[17].value || inputs[22].value == inputs[18].value || inputs[22].value == inputs[20].value || inputs[22].value == inputs[21].value || inputs[22].value == inputs[23].value || inputs[22].value == inputs[24].value){
         errFound++
     }
     // test input 24
     if(inputs[23].value == inputs[3].value || inputs[23].value == inputs[5].value || inputs[23].value == inputs[8].value || inputs[23].value == inputs[11].value || inputs[23].value == inputs[13].value || inputs[23].value == inputs[17].value || inputs[23].value == inputs[18].value || inputs[23].value == inputs[19].value || inputs[23].value == inputs[20].value || inputs[23].value == inputs[21].value || inputs[23].value == inputs[22].value || inputs[23].value == inputs[24].value){
         errFound++
     }              
     // test input 25
     if(inputs[24].value == inputs[0].value||inputs[24].value == inputs[4].value || inputs[24].value == inputs[6].value || inputs[24].value == inputs[9].value || inputs[24].value == inputs[12].value || inputs[24].value == inputs[14].value || inputs[24].value == inputs[18].value || inputs[24].value == inputs[19].value || inputs[24].value == inputs[20].value || inputs[24].value == inputs[21].value || inputs[24].value == inputs[22].value || inputs[24].value == inputs[23].value){
         errFound++
     }

     if(errFound == 0){
        alert('you won!')
        var confirmFoem = document.getElementById('popup');
        confirmFoem.style.top = '50%'
        break
       }
   }

    
}