<?php
/**
 * Created by PhpStorm.
 * User: Victo
 * Date: 2018-05-14
 * Time: 14:37
 */


if(strlen($_POST['name']) and empty($_POST['email'])){
    $name = htmlspecialchars($_POST['name']);
    $html = file_get_contents('4.1.2.2.html');
    $html = str_replace('$name' , $name , $html );
    header_remove();
    echo $html;
}elseif(strlen($_POST['name']) and !empty (strlen($_POST['email']))){
    header("content-type: text/plain");
    $name = htmlspecialchars($_POST['name']);
    $mail = htmlspecialchars($_POST['email']);
    echo 'Name: ' . $name . '  Email: ' . $mail;
}else echo 'No data or wrong data was submitted';
