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