<?php
    function greet(){
        echo "Hello, World! <br>";
    }

    greet();

    function greetUser($name){
        echo "Helllo, $name! <br>";
    }
    function add($a, $b){
        return $a + $b;
    }
    greetUser("Alice");
    echo "Sum:" . add(3,5);

    function factorial($n){
        if ($n <= 1) {
            return 1;
        } else {
            return $n * factorial($n - 1);
        }
    }
    $result = factorial(5);
    echo "Factorial of 5: $result";
?>