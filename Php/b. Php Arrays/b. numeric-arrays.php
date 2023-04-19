<?php

    $numbers = array(1,2,3,4,5);
    $names = array("Ali","Ahmet");

    $numbers[0] = "bir";
    $numbers[1] = "iki";
    $numbers[2] = "üç";
    $numbers[3] = "dört";
    $numbers[5] = "altı";

    echo "$numbers[0] <br>";
    echo "$numbers[1] <br>";
    echo "$numbers[2] <br>";
    echo "$numbers[3] <br>";
    echo "$numbers[4] <br>";
    echo "$numbers[5] <br>";

    # We can also use loops.

    echo "<br>";
    echo "$names[0] <br>";
    echo "$names[1] <br>";


    $brands = "BMW, Toyota, Mercedes";
    $brands2 = explode(",",$brands);

    echo "<br>";
    echo "Car brand : {$brands2[0]} <br>";
    echo "Car brand : {$brands2[1]} <br>";
    echo "Car brand : {$brands2[2]} <br>";
    
?>