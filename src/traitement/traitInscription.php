<?php
require_once '../fonction.php';

if(!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['confPassword'])){
    if($_POST['password'] === $_POST['confPassword']){
        $username = $_POST['username'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        insertUser($username, $password);
        session_start();
        header('Location: ../index.php');
    }
    else{
        echo 'erreur';
    }
}