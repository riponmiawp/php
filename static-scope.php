<?php 

function myNumber() {
    static $qunt = 1;//static scope
    echo "$qunt </br>";
    $qunt += 2;
}
myNumber();
myNumber();
myNumber();