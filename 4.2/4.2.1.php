<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <?php
    setcookie('time', date(DATE_COOKIE), (time()+(60*60*3)));
    setcookie('name', 'Jendelheim', time()+60*60*3);
    ?>
</head>
<body>
<form method="get" action="4.2.2.php">

    To accept cookies press the "submit buttom" and enter the ride!
    <input type="submit">
</form>

</body>
</html>
