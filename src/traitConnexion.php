<?php
session_start();
require_once 'fonction.php';

if(!empty($_POST['username']) && !empty($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    verifConnexion($username, $password);
    header('Location: index.php');
}
if($_POST['subDeco']){
    session_destroy();
    header('Location: index.php');
}