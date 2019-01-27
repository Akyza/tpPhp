<?php

///insert update et select * + un seul

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
    $pdo = new PDO('mysql:host=database; dbname=ma_db', 'mon_user', 'secret!');
    $query = "SELECT * FROM users WHERE username = :username";
    $statement = $pdo->prepare($query);
    $statement->execute([
        ':username' => $username,
    ]);
    $data = $statement->fetch(PDO::FETCH_ASSOC);
    echo $password;
    echo '<br>';
    echo $data['password'];
    if(password_verify($data['password'], $password)){
        echo 'ok';
    }
}