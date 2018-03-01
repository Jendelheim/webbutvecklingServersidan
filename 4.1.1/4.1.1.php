<?php
if(isset($_GET['gender']) and empty($_GET['city'])){
    $gender = htmlspecialchars($_GET['gender']);
    $html = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/4.1.1/4.1.1.2.html");
    $html = str_replace('$gender' , $gender , $html );
    echo $html;
}elseif(isset($_GET['gender']) and !empty($_GET['city'])){
    header("content-type: text/plain");
    $gender = htmlspecialchars($_GET['gender']);
    $city = htmlspecialchars($_GET['city']);
    echo 'Du är en '.$gender.' som kommer ifrån '. $city;
}else echo 'No data or wrong data was submitted';
?>