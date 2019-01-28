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
        $_SESSION['user'] = $username;
        header('Location: index.php');
    }else{
        echo 'erreur';
    }
}

///gestion articles et commentaires
function addArticle(string $title, string $content, string $author){
    $pdo = new PDO('mysql:host=database; dbname=ma_db', 'mon_user', 'secret!');
    $query = "INSERT INTO article (title, content, author) VALUES(:title, :content, :author)";
    $statement = $pdo->prepare($query);
    $statement->execute(array(
        ':title' => $title,
        ':content' => $content,
        ':author' => $author,
    ));
}