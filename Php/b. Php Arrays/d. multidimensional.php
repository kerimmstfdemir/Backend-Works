<?php

    $studentA = array("Ali Korkmaz", array(60,50,80));
    $studentB = array("Veli Yılmaz", array(70,50,90));

    echo $studentA[0]."<br>";  // Ali Korkmaz
    echo "{$studentA[1]}"."<br>";  // [60,50,80]
    echo $studentA[1][0]."<br>";  // 60
    echo $studentA[1][1]."<br>";  // 50
    echo $studentA[1][2]."<br>";  // 80

    $meanNoteA = ($studentA[1][0] + $studentA[1][1] + $studentA[1][2]) / 3;
    $meanNoteB = ($studentB[1][0] + $studentB[1][1] + $studentB[1][2]) / 3;

    echo "<br>";
    echo "$studentA[0]'s mean note : $meanNoteA <br>";
    echo "$studentB[0]'s mean note : $meanNoteB <br>";

    $studentC = array(
                    "100" => array(
                        "name"=>"Ahmet",
                        "surname"=>"Yılmaz",
                        "Mathematics"=>array(60,70,90),
                        "Physics"=>array(60,80,95)
                    ),
                    "101" => array(
                        "name"=>"Ayşe",
                        "surname"=>"Yılmaz",
                        "Mathematics"=>array(60,70,90),
                        "Physics"=>array(60,70,90)
                    ),
                    "102" => array(
                        "name"=>"Ali",
                        "surname"=>"Yılmaz",
                        "Mathematics"=>array(60,70,90),
                        "Physics"=>array(60,70,90)
                    )
                );

    echo $studentC["100"]["name"]."<br>";
    echo $studentC["101"]["name"]."<br>";
    echo ($studentC["100"]["Mathematics"][0] + $studentC["100"]["Mathematics"][1] + $studentC["100"]["Mathematics"][2]) / 3;
    echo "<br>".($studentC["100"]["Physics"][0] + $studentC["100"]["Physics"][1] + $studentC["100"]["Physics"][2]) / 3;
   
?>