<?php
//Global Scope 
$fastName = "Ripon </br>";
$lastName = "Mia";

echo $fastName;

//local Scope here
function fullAddress() {
    global $fastName;//Global Scope
    echo $fastName;
    echo $GLOBALS['lastName'];//Global Scope
}
fullAddress();
