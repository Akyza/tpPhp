<?php

///insert update et select * + un seul

//Gestion de compte
function insertUser(string $username, $password){
    $pdo = new PDO('mysql:host=database; dbname=ma_db', 'mon_user', 'secret!');
    $query = "INSERT INTO users (username, password) VALUES(:username, :pass)";
    $statement = $pdo->prepare($query);
    $statement->execute(array(
        ':username' => $username,
        ':pass' => $password,
    ));
}

function verifConnexion(string $username, $password){
    session_start();
    $pdo = new PDO('mysql:host=database; dbname=ma_db', 'mon_user', 'secret!');
    $query = "SELECT * FROM users WHERE username = :username";
    $statement = $pdo->prepare($query);
    $statement->execute([
        ':username' => $username,
    ]);
    $data = $statement->fetch(PDO::FETCH_ASSOC);
    if(password_verify($password, $data['password'])){
        $_SESSION['id_user'] = $data['id_user'];
        $_SESSION['user'] = $username;
        header('Location: index.php');
    }else{
        echo 'erreur';
    }
}

///gestion articles et commentaires
function addArticle(string $title, string $content, int $author){
    $pdo = new PDO('mysql:host=database; dbname=ma_db', 'mon_user', 'secret!');
    $query = "INSERT INTO article (title, content, author) VALUES(:title, :content, :author)";
    $statement = $pdo->prepare($query);
    $statement->execute([
        ':title' => $title,
        ':content' => $content,
        ':author' => $author,
    ]);
}

function getAllArticle(){
    $pdo = new PDO('mysql:host=database; dbname=ma_db', 'mon_user', 'secret!');
    $query = "SELECT * FROM article ORDER BY id_article DESC LIMIT 5";
    $statement = $pdo->prepare($query);
    $statement->execute();
    while($data = $statement->fetch(PDO::FETCH_ASSOC)){
        echo '<tr>',
            '<td>'.$data['title'].'</td>',
            '<td>'.$data['content'].'</td>',
            '<td><a href="viewArticle.php?id_article='.$data['id_article'].'">Voir plus</a></td>',
            '</tr>';
    }
}
function getArticle(int $idArticle){
    $pdo = new PDO('mysql:host=database; dbname=ma_db', 'mon_user', 'secret!');
    $query = "SELECT a.*, u.username as user FROM article a INNER JOIN users u ON a.author = u.id_user WHERE id_article = :idArticle";
    $statement = $pdo->prepare($query);
    $statement->execute([
        ':idArticle' => $idArticle,
    ]);
    $data = $statement->fetch();
    echo '<th>'.$data['title'].'</th>';
    echo '<tr><td><em>'.$data['user'].'</em></td>',
        '<td>'.$data['content'].'</td></tr>';
}

function postComment(int $idArticle, string $author, string $content){
    $pdo = new PDO('mysql:host=database; dbname=ma_db', 'mon_user', 'secret!');
    $query = "INSERT INTO commentaire (username, content, article_id) VALUES(:user, :content, :idArticle)";
    $statement = $pdo->prepare($query);
    $statement->execute([
        ':user' => $author,
        ':content' => $content,
        ':idArticle' => $idArticle,
    ]);
}

function getCommentsById(int $idArticle){
    $pdo = new PDO('mysql:host=database; dbname=ma_db', 'mon_user', 'secret!');
    $query = "SELECT * FROM commentaire WHERE article_id = :idArticle ORDER BY id_comment DESC";
    $statement = $pdo->prepare($query);
    $statement->execute([
        ':idArticle' => $idArticle,
    ]);
    while($data = $statement->fetch(PDO::FETCH_ASSOC)){
    
    echo '<tr><td><em>'.$data['username'].'</em></td>',
        '<td>'.$data['content'].'</td></tr>';
    }
}