<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <input type="number" name ="num01" placeholder="Number one">
        <select name="operator">
        <option value="add">+</option>
        <option value="subtract">-</option>
        <option value="multiply">*</option>
        <option value="division">/</option>
        </select>
        <input type="number" name ="num02" placeholder="Number two">
        <button>calculate</button>
        
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        //grab data from input
        $num01 = filter_input(INPUT_POST, "num01", FILTER_SANITIZE_NUMBER_FLOAT);
        $num02 = filter_input(INPUT_POST, "num02", FILTER_SANITIZE_NUMBER_FLOAT);
        $operator = htmlspecialchars($_POST["operator"]);

        //error handler
        $errors = false;

        if (empty($num01)|| empty($num02)||empty($operator)){
            echo "<p class='calc-error'> Fill in all fields!</p>";
            $errors= true;

        }

        if (!is_numeric($num01)||!is_numeric($num02)){
            echo "<p class='calc-error'> Fill in all fields!</p>";
            $errors= true;
        }

         // calculate the number

        if (!$errors){
            $value = 0;
            switch($operator){
                case "add":
                    $value = $num01 + $num02;
                    break;
                case "subtract":
                    $value = $num01 - $num02;
                    break;
                case "multiply":
                    $value = $num01 * $num02;
                    break;
                case "divide":
                    $value = $num01 / $num02;
                    break;
                default:
                    echo "<p class='calc-error'>something went wrongs!</p>"; 
                }
                
        }

            echo "<h3 class='answer'>Result =".  $value . "</h3>";

    }
    ?>
</body>
</html>