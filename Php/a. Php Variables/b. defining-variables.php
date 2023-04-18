<?php
    $number1 = 10;
    $number2 = 20;

    // $number1 = 30;
    /*  
       //* 1. Variable names cannot start with numbers. 
       //* ($1number => false)
    */

    /*
        //* 2. Space characters cannot be used between variable names.
        //* ($number 3 => false)
    */

    $number_3 = 30;

    $name = "Kerim Mustafa";
    $surname = 'Demir';

    //* 3. There is case sensitivity when defining a variable.
    $Name = "Kerim";

    //* 4. Turkish characters should not be used while defining the variable. ($doğumTarihi => false)
    $dogumTarihi = 1994;

    echo $number1." ".$number2;
    echo "<br>";
    echo $name." ".$surname;
    echo "<br>";
    echo $Name." ".$surname." ".$dogumTarihi 
?>