<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $fruits = [
        'apple',
        'pear',
        'banana',
        'mango',];

        $more =["pawpaw","watermelon","coconut",];

    echo $fruits [1];
    echo "<br>";

    unset($fruits[1]);
    array_splice($fruits,2,0, $more);

    $fruits[] = "orange";

    echo $fruits[0];
    echo "<br>";
    //echo $fruits[3];

    $fruits[3] = "gonam";
    echo "<br>";
    //echo $fruits[3];
    echo "<br>";
    print_r($fruits);
    echo "<br>";


    /*$task= [
        "dogs_care" =>"tife",
         "laundry" =>"ayo",
         "chicken_care" =>"busayo",
         "dishes/trash" =>"feranmi",
    ]; 
    //echo count($task);
    //print_r($task);
    echo sort($task);
    print_r($task);

    array_push($fruits, "strawberry");
    print_r($fruits);
    echo "<br>";

    $task["dusting"]="bro deji";
    print_r($task);*/

     $name=[
        "dad"=> array("olu  soji","joshua"),
        "mum"=> array("olufunmilayo","rebecca"),
        "temidayo",
        "pleasant",
     ];
     
     echo $name["mum"][0];
    
    ?>
</body>
</html>