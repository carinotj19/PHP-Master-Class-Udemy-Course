<?php
    $name = "John";
    echo "Hello, $name";
    $age = 30;
    if ($age >= 18) {
        echo "<p>Welcome, $name! You are eligible</p>";
    } else {
        echo "<p>Sorry, $name! You are not eligible</p>";
    }

    echo "<ul>";
    for ($i=1; $i < 5; $i++) { 
        echo "<li>Item $i</li>";
    }
    echo "</ul>";
    echo "Hello, PHP World!";
?>