<?php

    /*
    1- Ürünleri numeric dizide saklayınız ve ürün fiyatları ortalamasını hesaplayınız.
           
        IPhone 11: 7000
        IPhone 12: 9000
        Samsung S20: 8000
    */

    //* Solution 1 :
    $phone_Prices = array(7000, 9000, 8000);
    $mean_Price = ($phone_Prices[0]+$phone_Prices[1]+$phone_Prices[2])/3;

    echo "Phones mean price : $mean_Price"."<br>";

    //* Solution 2 :
    $products = array("Iphone11" => 7000, "Iphone12" => 9000, "SamsungS20" => 8000);
    $products_Mean_Price = ($products["Iphone11"] + $products["Iphone12"] + $products["SamsungS20"])/3;
    echo "Mean price : $products_Mean_Price";

    /*
    2- Aşağıdaki oyuncu bilgilerini "players" isimli associative dizi içinde saklayınız.

        player 1: 
            nickname     => ronaldo
            name         => Cristiano Ronaldo
            yearOfBirth  => 1985
            nationality  => Portugal
            current_team => Portugal
            history      => Juventus,Real Madrid,Portugal

        player 2: 
            nickname     => messi
            name         => Lionel Messi
            yearOfBirth  => 1987
            nationality  => Argentina
            current_team => Barcelona,
            history      => Barcelona,Argentina,Portugal
    */

    $players = array("ronaldo" => array(
                                        "name" => "Cristiano Ronaldo",
                                        "yearOfBirth" => 1985,
                                        "nationality" => "Portugal",
                                        "current_team " => "Portugal",
                                        "history" => array("Juventus", "Real Madrid", "Portugal")
                                    ),
                    "messi" => array(
                                        "name" => "Lionel Messi",
                                        "yearOfBirth" => 1987,
                                        "nationality" => "Argentina",
                                        "current_team " => "Barcelona",
                                        "history" => array("Barcelona", "Argentina", "Portugal")
                                )
                    );

    echo "<br><br>";
    print_r($players["ronaldo"]["name"]);
    echo "<br>";
    print_r($players["messi"]["history"][0]);                
?>