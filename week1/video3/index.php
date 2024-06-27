<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "how to embed php in html";
    
    if (true){
        echo"<p> <h3>a paragraph tag did this</h3></p>";
    }



    //this a one line comment
    echo "one line comment"
    /*multiple lines comments*/ 
    ?>

<?php
    echo "how to embed php in html";
    
    if (true){?>
        echo"<p> <h3>a paragraph tag did this</h3></p>";
   <?php }?>
</body>
</html>