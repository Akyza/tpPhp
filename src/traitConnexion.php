<?php
require_once 'fonction.php';

if(!empty($_POST['username']) && !empty($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    verifConnexion($username, $password);
}