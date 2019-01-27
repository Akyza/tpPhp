<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="traitInscription.php" method="post">
        <label for="username">Username : </label>
        <input type="text" name="username">
        <p></p>
        <label for="password">Password : </label>
        <input type="password" name="password">
        <p></p>
        <label for="confPassword">Confirm Password : </label>
        <input type="password" name="confPassword">
        <p></p>
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>