<?php
session_start();

if($_SESSION['user']){ ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <title>Ajouter un article</title>
    </head>
    <body>
        <a href='index.php'><input type="button" value="Retour"></a>
        <br>
        <h2>Ajouter un article</h2>
        <form action="traitement/traitArticle.php" method="post">
            <label for="title">Titre de l'article :</label>
            <input type="text" name="title">
            <p>Contenu de l'article : </p>
            <textarea name="content" cols="40" rows="10" maxlenght='250'></textarea>
            <input type="hidden" name="author" value="<?= $_SESSION['user'] ?>">
            <br>
            <input type=submit name="addArticle" value="Envoyer">
        </form>
    </body>
    </html>


<?php }else{
    header('Location: index.php');
}