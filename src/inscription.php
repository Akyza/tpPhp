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
    <form action="traitement/traitInscription.php" method="post">
        <label for="username">Username : </label>
        <input type="text" name="username" required>
        <p></p>
        <label for="password">Password : </label>
        <input type="password" name="password" required>
        <p></p>
        <label for="confPassword">Confirm Password : </label>
        <input type="password" name="confPassword" require>
        <p></p>
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>