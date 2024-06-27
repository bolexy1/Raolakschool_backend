<?php
declare(strict_types=1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php


function sayHello(string $name ){
return "hello" ." ". $name. "!";
}



$test = sayHello("Tife");

echo $test;
echo "<br>";

function calculator(int $num01, int $num2 ){
    $result = $num01 + $num2;
    return  $result;
    }
    
    $test = calculator(3,5);
    echo $test;

?>
</body>
</html>