<?php
    $x = 10;
    $y = 20;

    function myText(){
        global $x, $y;
        $y = $x + $y;
    }

    myText();
    echo $y;

    $globalVar = "I am global";

    function displayGlobal(){
        global $globalVar;
        echo "<p>$globalVar</p>";
    }

    function modifyGlobal(){
        global $globalVar;
        $globalVar = "I am globally Modified";
    }

    displayGlobal();
    modifyGlobal();
    displayGlobal();
?>