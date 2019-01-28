<?php

require_once '../fonction.php';

if($_POST['addArticle']){
    if(!empty($_POST['title']) && !empty($_POST['content']) && !empty($_POST['author'])){
        $title = $_POST['title'];
        $content = $_POST['content'];
        $author = $_POST['author'];
        addArticle($title, $content, $author);
        //header('Location: ../index.php');
    }else{
        header('Location: ../addArticle.php');
    }
}