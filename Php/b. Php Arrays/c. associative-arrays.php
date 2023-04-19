<?php

    # associative arrays

    # key-value => 41: kocaeli, 34: istanbul

    $plates = array("41","34");
    $cities = array("kocaeli","istanbul");

    echo "$plates[0] : $cities[0] <br>";
    echo "$plates[1] : $cities[1] <br>";

    $plate_infos = array("41"=>"kocaeli", "34"=>"istanbul");
    $telephone_directory = array("ali"=>"5324444", "ahmet"=>"5555555");

    echo $plate_infos["41"]."<br>";
    echo $plate_infos["34"]."<br>";

    $plate_infos["53"] = "rize";
    $plate_infos["35"] = "izmir";

    echo $plate_infos["35"]."<br>";

?>