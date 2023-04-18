<?php
    // $message = 'My name\'s Kerim Mustafa Demir';

    $name = "Kerim Mustafa";
    $surname = "Demir";
    $age = 28;
    // $message = "My name's {$name} {$surname} and {$age} years old.";
    $message = "my name's ".$name." ".$surname." and ".$age." years old.";
    echo $message."<br>";
    echo $message[0]."<br>";  # M
    echo $message[3]."<br>";  # n

    echo strlen($message)."<br>";  # 47 characters
    echo str_word_count($message)."<br>";  # 8 words
    echo strtolower($message)."<br>";  # converts to lowercase
    echo strtoupper($message)."<br>";  # converts to uppercase
    echo ucfirst($message)."<br>";  # first letter converts to uppercase.
    echo str_replace(["Kerim", "28"], ["Kerem", "26"], $message)."<br>";  # replace

?>