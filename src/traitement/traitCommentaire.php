<?php session_start(); 
require '../fonction.php';

if(!empty($_POST['idArticle']) && !empty($_POST['user']) && !empty($_POST['content'])){
    $idArticle = $_POST['idArticle'];
    $user = $_POST['user'];
    $content = $_POST['content'];
    postComment($idArticle, $user, $content);
    header('Location: ../viewArticle.php?id_article='.$idArticle);
}else{
    header('Location: ../index.php');
}