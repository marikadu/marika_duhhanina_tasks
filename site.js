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

function changeBackgroundColour(where, newColour){
    let color = document
    document.body.style.color = color
    
}

//crud
function crud(){
    let fname=(document.form1.fname.value).trim();
    if (fname.length<5){
        alert("First name must be more than 5 characters");
        return false;
    }
}