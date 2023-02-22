<?php
$title = "JS in class";
include "header.php"?>

<?php

?>

<h2>A simple button to display date</h2>
<button onclick="this.innerHTML = Date()"> Click to know date </button>

<button onclick="getElementById(date).innerHTML = Date()"> Click to know date </button>
<p id="date"> </p>


<h2>Change the background colour</h2>
<form>
    <input type="color" id="background" onchnage="changeBackgroundColour()">
</form>

<h2>Change the font colour</h2>
<form>
    <input type="color" id="font" onchnage="changeFontColour()">
</form>

<span onmouseover="this.style.color='blue';
                this.style.backgroundColour='yellow';
                this.style.fontSize='2em';" 
                onmouseout="
                this.style.color='green';
                this.style.backgroundColour='aqua';
                this.style.fontSize='3em';" >
Some text </span>

<span id="mo" onmouseover = "onm()" onmouseout="ono()"> Hello World </span>

<h2>JavaScript Form Validation</h2>

    

<?php include "footer.php"?>