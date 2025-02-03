<?php
    $dayofWeek = "Wednesday";

    switch ($dayofWeek) {
        case 'Monday':
            echo "Start of the week!";
            break;
        case 'Wednesday':
            echo "Halfway there!";
            break;
        case 'Friday':
            echo "Weekend is near!";
            break;
        default:
            echo "Enjoy your day!";
            break;
    }

    $weather = "rainy";

    switch ($dayofWeek) {
        case 'sunny':
            echo "It's a sunny day!";
            break;
        case 'rainy':
            echo "Grab an umbrella!";
            break;
        default:
            echo "Check the forecast!";
            break;
    }
?>