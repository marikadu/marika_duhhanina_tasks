function hello(){
    alert("Welcome to my website");
}

function add(){
    document.write(5+6);
}

// function to change the background colour of the page
function changeColour(where, newColour){
    if (where == "newColour"){
        document.body.style.backgroundColour = newColour;
    }
}