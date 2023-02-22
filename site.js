function hello(){
    alert("Welcome to my website");
}

function add(){
    document.write(5+6);
}

/* OLD function to change the background colour of the page
function changeColour(where, newColour){
    if (where == "newColour"){
        document.body.style.backgroundColour = newColour;
    }
}
*/

function changeBackgroundColour(){
            let color = document.getElementById('background').value;
            document.body.style.backgroundColor = color;
    
}

function changeFontcolor(){
    let font = document.getElementById('font').value;
    document.body.style.color = font;
}

function onm(){
    document.getElementById('mo').style.color = 'blue'; 
    document.getElementById('mo').style.fontStyle = 'italic';
    document.getElementById('mo').style.backgroundColor  = 'yellow';
    document.getElementById('mo').style.fontSize = '2em';
}

function ono(){
    document.getElementById('mo').style.color = 'red'; 
    document.getElementById('mo').style.fontStyle = 'normal';
    document.getElementById('mo').style.fontSize = '1.1em';
    document.getElementById('mo').style.backgroundColor  = 'white';
}



//crud
function crud(){
    let fname=(document.form1.fname.value).trim();
    if (fname.length<5){
        alert("First name must be more than 5 characters");
        return false;
    }
}

function fnameVal(){
    let fname=(document.form1.fname.value).trim();
    if (fname.length<5){
        alert("First name must be more than 5 characters");
        return false;
    }
}