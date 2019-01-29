<?php session_start(); ?>
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
<?php include 'fonction.php';?>
<a href="index.php"><input type="button" class="btn btn-primary btn-sm" name="retour" value="retour"></a>
    <table class="table table-striped table-bordered">
    <th>Auteur</th>
        <?php getArticle($_GET['id_article']); ?>
    </table>
    <p>Zone Commentaire :</p>
    <form action="traitement/traitCommentaire.php" method="post">
        <input type="hidden" name="idArticle" value="<?= $_GET['id_article']; ?>">
        <p>Nom : </p>
        <input type="text" name="user" value="<?= ($_SESSION['user'] ? $_SESSION['user'] : ""); ?>"> 
        <p>Commentaire : </p>
        <textarea name="content" cols="40" rows="10" maxlenght='250'></textarea><br>
        <input type="submit" class="btn btn-primary btn-sm" value="submit">
    </form>
    <p></p>
    <table class="table table-striped table-bordered">
    <th>Auteur</th>
    <th>Commentaire</th>
        <?php getCommentsById($_GET['id_article']); ?>
    </table>

</body>
</html>