<?php

///insert update et select * + un seul

//Gestion de compte
function insertUser($username, $password){
    $pdo = new PDO('mysql:host=database; dbname=ma_db', 'mon_user', 'secret!');
    $query = "INSERT INTO users (username, password) VALUES(:username, :pass)";
    $statement = $pdo->prepare($query);
    $statement->execute(array(
        ':username' => $username,
        ':pass' => $password,
    ));
}

function verifConnexion($username, $password){
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

function addArticle($title, $content, $author){
    $pdo = new PDO('mysql:host=database; dbname=ma_db', 'mon_user', 'secret!');
    $query = "INSERT INTO FROM article (title, content, author) VALUES (:title, :content, :author)";
    $statement = $pdo->prepare($query);
    $statement->execute([
        ':title'=>$title,
        ':content'=>$content,
        ':author'=>$author,
    ]);
}