<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Built in variables</title>
</head>
<body>
    <?php  
   /*echo $_SERVER["DOCUMENT_ROOT"];
   ECHO "<br>";
   echo $_SERVER["PHP_SELF"];
   ECHO "<br>";
   echo $_SERVER["SERVER_NAME"];
   ECHO "<br>";
   echo $_SERVER["REQUEST_METHOD"];*/

   //echo $_GET["name"];
 
   echo $_GET["eyecolor"];

   echo $_REQUEST["name"];

   $_SESSION["username"] ="temidayo";
   echo "<br>";
   
   echo $_SESSION["username"];
    ?>
</body>
</html>