<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   /* $string = "he llo bo ss";

    echo strlen($string);
    echo "<br>";
    echo strpos($string, "o");
    echo "<br>";
    echo strtoupper($string);
    echo "<br>";
    echo str_replace("boss", "bolexy",$string);
    echo "<br>";

    echo substr($string, 2,-1);

    print_r(explode(" ",$string));*/

    $number = -5.5;

    echo abs($number);
    echo "<br>";
    echo round($number);
    echo "<br>";
    echo pow(2,3);
    echo "<br>";
    echo sqrt(4);
    echo "<br>";
    echo rand(1,100);

    // array functions

    $food =["amala","iyan","eba","semo",];
    $nut =["groundnut","cashewnut","wallnut"];
    echo "<br>";
   echo count($food);
   echo "<br>";
   echo is_array($food);

   array_push($food,"fufu");
   echo "<br>";

   print_r($food);
   echo "<br>";
   array_pop($food,);
   print_r($food);
   echo "<br>";
   print_r(array_reverse($food));
   echo "<br>";
   print_r(array_merge($food,$nut));
   // date functions
   echo date("y-m-d");
   echo "<br>";

   $date = "1998-12-18 19:00:00";
   echo strtotime($date);






    
    
    
    ?>
</body>
</html>