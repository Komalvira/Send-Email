<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h1>PHP Email DEMO</h1>
        <form action="email.php" method="post">
            Send To:<input type="email" name="to" placeholder="example@gamil.com"></br>
            Subject:<input type="text" name="subject" id="subject"></br>
            Message:<textarea rows="5" cols="30" id="message" name="message"></textarea></br>
            <input type="submit" value="Send Email">
            <input type="reset" value="Clear Email"> 
</form>

</center>
</body>
</html>