<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>conditions</title>
</head>
<body>
    <?php

    $bool = true;
    $a = 1;
    $b = 5;

    $result = match ($a) {
        1 => "variable a is equal to 1",
        2 => "variable a is equal to 2",
    
    };

    echo "<br>";

    echo $result;

   /* switch($a){
        case 1:
            echo "the first case is correct";
            break;
        case 2:
            echo "the second condition is correct";
            break;   
        case 4:
            echo "the second condition is correct";
            break;   
        default:
            echo"none of this is correct";
            echo"<br>";

    }
    
    if ($a < $b && !$bool) {
        echo "a is less than b";

    }
    else if ($a < $b && $bool) {
        echo "the second is true";

    }  else if ($a < $b && !$bool) {
        echo "the second is true";

    } else if ($a < $b && !$bool) {
        echo "the second is true";

    } else if ($a < $b && !$bool) {
        echo "the second is true";

    } else {
        echo "none was correct bruv";

    }*/
    
    ?>
</body>
</html>