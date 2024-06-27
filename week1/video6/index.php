<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <main>
        <div>
            <form action="text.php" method="POST">
                <label for="firstname">firstname</label>
                <br>
            <input type="text" name="firstname" placeholder="enter your firstname">
            <br>
            <label for="phone_number">phone number</label>
            <br>
            <input type="number" name="number" placeholder="enter your number">
            <br>
            <label for="mail">Email</label>
            <br>
            <input type="text" name ="mail" placeholder="enter your mail">
            <br>
            <label for="cloth">color of shirt</label>
            <br>
            <select name="cloth" id="cloth">
                <option value="none">none</option>
                <option value="b">Black</option>
                <option value="w">White</option>
            </select>
            <br>
            <button type="submit">Submit</button>
        </div>
    </main>
</body>
</html>