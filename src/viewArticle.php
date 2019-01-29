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
</body>
</html>