<?php
include 'fonction.php';

if(!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['confPassword'])){
    if($_POST['password'] === $_POST['confPassword']){
        $username = $_POST['usernanme'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        echo 'test';
        insertUser($username, $password);
    }
    else{
        echo 'erreur';
    }
}