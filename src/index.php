<?php session_start() ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php include 'fonction.php'; ?>
<?php if (!$_SESSION) : ?>
    <form action="traitConnexion.php" method="post">
        <label for="username">Username : </label>
        <input type="text" name="username" required>
        <p></p>
        <label for="password">Password : </label>
        <input type="password" name="password" redquired>
        <p></p>
        <input type="submit" name="submit" value="submit">
    </form>
    <a href="inscription.php">Sign In</a>
<?php else: echo 'Bonjour '.$_SESSION['user']; endif; ?>
    <table border="1">
       <th>Title</th>
       <th>Description</th> 
    </table>
</body>
</html>