<?php
    $mark = 120;
    if ($mark >= 80) {
        echo "you have an A";
    }

    $gender = 'M';
    if ($gender == 'M') {
        echo "Male";
    } else {
        echo "Female";
    }

    $temperature = 25;
    if ($temperature < 10) {
        echo "It's cold, bundle up";
    } elseif ($temperature >= 10 && $temperature < 20) {
        echo "A bit chilly, grab a light jacket!";
    } else {
        echo "Perfect weather. Enjoy your day!";
    }
?>