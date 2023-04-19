<?php

    $brand1 = "BMW";
    $brand2 = "Toyota";
    $brand3 = "Mercedes";

    $brands = "BMW, Toyota, Mercedes";

    echo "My favorite car {$brand1}"."<br>";
    echo "My favorite car {$brand2}"."<br>";
    echo "My favorite car {$brand3}"."<br>";

    $brands2 = array("BMW","Toyota", "Mercedes");

    echo gettype($brands2)."<br>";
    echo $brands2[0]."<br>";  # BMW
    echo $brands2[1]."<br>";  # Toyota
    echo $brands2[2]."<br>";  # Mercedes

    echo "My favorite car {$brands2[0]}"."<br>";
    echo "My favorite car {$brands2[1]}"."<br>";
    echo "My favorite car {$brands2[2]}"."<br>";

?>