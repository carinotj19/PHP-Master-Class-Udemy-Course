<?php
    $num = 3;
    while ($num > 0):
        echo "Coundown: $num <br>";
        $num--;
    endwhile;

    $condition = true;
    while ($condition) {
        echo "This loop runs indefinitely <br>";

        if (/* some condition */) {
            $condition = false;
        }
    }
?>