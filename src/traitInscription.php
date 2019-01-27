<?php
include 'fonction.php';

if(!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['confPassword'])){
    if(password_hash($_POST['password'], PASSWORD_DEFAULT) === password_hash($_POST['confPassword'], PASSWORD_DEFAULT)){
        $username = $_POST['usernanme'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        insertUser($username, $password);
    }
}