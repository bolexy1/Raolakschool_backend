<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operators</title>
</head>
<body>
    <?php
    //string operation
    $A = "hello";
    $B = "World";
    $C = $A ." ". $B;
    echo "<br>";
    echo $C;
    echo "<br>";
    // algibric operation
    $a = 3;
    $b = 3;
    $g = 5;
    $h = 6;
    $c = $a + $b;
    $d = $b / $a;
    $e = $a * $b;
    $f = $b % $a;
    echo $c;
    echo "<br>";
    echo $d;
    echo "<br>";
    echo $e;
    echo "<br>";
    echo $f;
    echo "<br>";

    // comparison
    if ($a == $b) {
        echo "True statment";
    }

    echo "<br>";

    if ($a == $b || $g == $h && $a == $h) {
        echo "True";
    }



    // Assignment operation 
    echo "<br>";
     $p = 3;
     $p += 4;

     echo $p;
     echo "<br>";

     //incrementing / decrementing operation

     $x = 2;
     echo "<br>";
     echo ++$x;
     echo "<br>";
     echo --$x;
     echo "<br>";
     echo $x++;
     echo "<br>";
     echo $x--;




    
    
    ?>
</body>
</html>