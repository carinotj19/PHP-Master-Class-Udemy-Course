<?php
    function timelessEcho(){
        static $timelessVar = 0;
        echo "<p>Timeless Echo: $timelessVar</p>";
        $timelessVar++;
    }

    timelessEcho();
    timelessEcho();
    timelessEcho();

    function timeCapsule(){
        $localVar = 1;
        static $staticVar = 1;
        
        echo "<p>Local Variable: $localVar</p>";
        echo "<p>Static Variable: $staticVar</p>";
        $localVar++;
        $staticVar++;
    }

    timeCapsule();
    timeCapsule();
    timeCapsule();
?>