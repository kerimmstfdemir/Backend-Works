<?php

    echo "result=".(10+5)."<br>";
    echo "result=".(10-5)."<br>";
    echo "result=".(10*5)."<br>";
    echo "result=".(10/5)."<br>";

    $number1 = 10;
    $number2 = 20;
    $number3 = 5;

    echo "<br>";
    echo "result=".(($number1+$number2)/$number3)."<br>";
    echo "result=".($number1-$number2)."<br>";
    echo "result=".($number1*$number2)."<br>";
    echo "result=".($number1/$number2)."<br>";

    echo "<br>";
    echo var_dump(is_int(10))."<br>";
    echo var_dump(is_int(10.2))."<br>";
    echo var_dump(is_int("10"))."<br>";

    echo "<br>";
    echo var_dump(is_float(10))."<br>";
    echo var_dump(is_float(10.2))."<br>";
    echo var_dump(is_float("10"))."<br>";

    echo "<br>";
    echo var_dump(is_numeric("10"))."<br>";
    echo var_dump(is_numeric(10))."<br>";
    echo var_dump(is_numeric("10a"))."<br>";

    echo "<br>";
    echo abs(-10)."<br>";
    echo ceil(4.3)."<br>";  # rounds up
    echo floor(4.9)."<br>";  # rounds down
    echo round(4.4)."<br>";  # rounds 

    echo "<br>";
    echo sqrt(25)."<br>";
    echo pow(2,5)."<br>";
    echo max(2,5,10,4,89)."<br>";
    echo min(2,5,10,4,89)."<br>";
?>