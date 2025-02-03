<?php
    for ($i=1; $i <= 5; $i++) { 
        echo "Iteration $i: Hello World <br>";
    }
    for ($i=3; $i > 5; $i--) { 
        echo "Countdown: $i <br>";
    }

    $names = ["Alice", "Bob", "Charlie"];
    for ($index=0; $index < count($names); $index++) { 
        echo "Hello, {$names[$index]}! <br>";
    }

    for ($i=1; $i <= 3; $i++) { 
        for ($j=1; $j <= 3; $j++) { 
            echo "($i, $j)";
        }
        echo "<br>";
    }
?>