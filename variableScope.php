<?php
    $globalVar = "I am global";

    function displayGlobal(){
        global $globalVar;
        echo "<p>$globalVar</p>";
    }
    displayGlobal();

    function localScope(){
        $localVar = "I am local";
        echo "<p>$localVar</p>";
    }
    localScope();

    function mysticCounter(){
        static $count = 0;
        $count++;
        echo "<p>Mystic power activated: $count</p>";
    }
    mysticCounter();
    mysticCounter();
    mysticCounter();

?>