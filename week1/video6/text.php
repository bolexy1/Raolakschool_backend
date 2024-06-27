<?php

//Var_dump($_SERVER["REQUEST_METHOD"]);
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $firstname = htmlspecialchars($_POST["firstname"]);
    $Number = htmlspecialchars($_POST["number"]);
    $mail = htmlspecialchars($_POST["mail"]);
    $color = htmlspecialchars($_POST["cloth"]);
   

    echo "your firstname is ";
    echo "<br>";
    echo $firstname;
    echo "<br>";
    echo "your number is ";
    echo "<br>";
    echo $Number;
    echo "<br>";
    echo"your mail is ";
    echo "<br>";
    echo $mail;
    echo "<br>";
    echo "your shirt color is ";
    echo "<br>";
    echo $color;
}