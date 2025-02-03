<?php
    define("PI", 3.1416);

    $radius =  5;
    $area = PI * $radius * $radius;

    echo "<p>The are of a circle with radius $radius is $area</p>";
    echo "<p>Current file: " . __FILE__ . "</p>";
    echo "<p>Current line: " . __LINE__ . "</p>";
    echo "<p>Current Directory: " . __DIR__ . "</p>";

    echo "<p>PHP Version: " . PHP_VERSION . "</p>";
    echo "<p>PHP OS: " . PHP_OS . "</p>";
    echo "<p>Maximum Integer: " . PHP_INT_MAX . "</p>";
?>