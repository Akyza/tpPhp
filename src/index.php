<?php session_start() ?>
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
<?php include 'fonction.php'; ?>
<?php if (!$_SESSION) : ?>
    <form action="traitement/traitConnexion.php" method="post">
    <div class="form-row">
        <div class="col">
            <label for="username">Username : </label>
            <input type="text" class="form-control" name="username" required>
        </div>
        <p></p>
        <div class="col">
            <label for="password">Password : </label>
            <input type="password" class="form-control" name="password" redquired>
        </div>
        <p></p>
    </div>
    <input type="submit" class="btn btn-primary btn-sm" name="submit" value="submit">
    <a href="inscription.php"><input type="button" class="btn btn-primary btn-sm" value="Sign In"></a>
    </form>

<?php else: echo 'Bonjour '.$_SESSION['user']; ?>
    <form action="traitement/traitConnexion.php" method="post">
        <input type="submit" class="btn btn-primary btn-sm" name="subDeco" value="Déconnexion">
    </form>
    <a href="addArticle.php"><input type="button" class="btn btn-primary" name="addArticle" value="Ajouter un article"></a>

<?php endif; ?>
    
    <table class="table table-striped table-bordered">
       <th>Title</th>
       <th>Description</th>
       <th>Action</th>
       <?php getAllArticle(); ?> 
    </table>
</body>
</html>