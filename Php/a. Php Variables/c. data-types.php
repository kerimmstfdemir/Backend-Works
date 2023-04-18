<?php

    /*
        Data Types:
    
        string          : textual information
        int             : integers
        double          : decimal numbers
        boolean         : true/false information
        object          : structures produced with the class structure
        array           : data structure that allows storing multiple items in a single variable
        null            : variable without value
    */

    $productName = "Iphone 12"; # string
    echo gettype($productName);
    
    echo "<br>";

    $price = 9000; # integer
    echo gettype($price);

    echo "<br>";

    $vatRate = 0.18; # double
    echo gettype($vatRate);

    echo "<br>";

    $onSale = true; # boolean
    echo gettype($onSale);

    echo "<br>";

    $a = (double)10; # integer to double
    echo gettype($a);

    echo "<br>";

    $b = (int)10.5; # double to int
    echo gettype($b)." : ".$b;

    echo "<br>";

    $c = (int)"20"; # string to int
    echo gettype($c)." : ".$c;

    echo "<br>";

    $d = (int)"a20"; # string to int
    echo gettype($d)." : ".$d;

    echo "<br>";

    $e = (int)"20a5b"; # string to int
    echo gettype($e)." : ".$e;

    echo "<br>";

    $f = (int)true; # boolean to int
    echo gettype($f)." : ".$f;

    echo "<br>";

    $g = (int)false; # boolean to int
    echo gettype($g)." : ".$g;
    
?>