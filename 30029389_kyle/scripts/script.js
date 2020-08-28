var number = 1;


function Left(){
    if(number - 1 === 0){
        number = 5;
    }
    else{
        number --;
    }
    SetbackGround();
}

function Right(){
    if(number + 1 === 6){
        number = 1;
    }
    else{
        number ++;
    }
    SetbackGround();
}

var contentnumber = 1;
function addCode() { 
    contentnumber += 1;
    document.getElementById("extracontent").innerHTML += `<div class='formcontent'><h1>Content ${contentnumber}</h1><label for='header'><b>Header</b></label><input type='text' placeholder='Enter Header' name='header[]' required></textarea><label for='content'><b>Content</b></label><br><textarea type='text' width='90vw' placeholder='Enter Content' name='content[]' required></textarea></div>`;
} 

function removeCode() {
    document.getElementById("extracontent").innerHTML -= `<div class='formcontent'><h1>Content ${contentnumber}</h1><label for='header'><b>Header</b></label><input type='text' placeholder='Enter Header' name='header[]' required></textarea><label for='content'><b>Content</b></label><br><textarea type='text' width='90vw' placeholder='Enter Content' name='content[]' required></textarea></div>`;
    contentnumber -= 1;
}

function SetbackGround(){
    var x = document.getElementById("change");
    
    if(number === 1){
        x.style.backgroundImage= 'url(images/SCP004_door.jpg)';
    }
    if(number === 2){
        x.style.backgroundImage= 'url(images/SCP-005.jpg)';
    }
    if(number === 3){
        x.style.backgroundImage= 'url(images/maxresdefault.jpg)';
    }
    if(number === 4){
        x.style.backgroundImage= 'url(images/90.jpg)';
    }
    if(number === 5){
        x.style.backgroundImage= 'url(images/800px-SCP002.jpg)';
    }
    
}

function myFunction() {
    var x = document.getElementById("myLinks");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
        
        
    }
    }




var coll = document.getElementsByClassName("collapsible");
var i;
if (screen.width < 700) {
    for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function() {
            
        this.classList.toggle("active");
        var content = this.nextElementSibling;
        
            if (content.style.display === "block") {
                content.style.display = "none";
            } 
            else {
                
                for(x = 0; x < coll.length; x++){ //For loop that sets everything to closed before finally setting selected to open
                    var contents = coll[x].nextElementSibling;
                    contents.style.display = "none";
                    content.style.display = "block";
                
                }
            }
        });
    }
}
else{
    for (i = 0; i < coll.length; i++) {
        var content = coll[i].nextElementSibling;
        content.style.display = "block";
    }
}


var contentnumber = 1;



