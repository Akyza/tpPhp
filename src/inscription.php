<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <form action="traitement/traitInscription.php" method="post">
    <div>
        <div class="col">
            <label for="username">Username : </label>
            <input type="text" class="form-control" name="username" required>
        </div>
        <p></p>
        <div class="col">
            <label for="password">Password : </label>
            <input type="password" class="form-control" name="password" required>
        </div>
        <p></p>
        <div class="col">
            <label for="confPassword">Confirm Password : </label>
            <input type="password" class="form-control" name="confPassword" require>
        </div>
        <p></p>
    </div>
    <input type="submit" class="btn btn-primary btn-sm" name="submit" value="submit">
    </form>
</body>
</html>