<?php
/**
 * Created by PhpStorm.
 * User: Victo
 * Date: 2017-11-04
 * Time: 18:06
 */

header('Content-type: text/plain');

define('MB', 1048576);

//rint_r($_FILES);
if (($_FILES['file']['size'] > 5*MB) or empty($_FILES)){
    echo 'Something went kinda wrong.. either the file is too big or no image is selected!';
    die;
}

$filesize = $_FILES['file']['size'];
$filename = $_FILES['file']['tmp_name'];
$ext = $_FILES['file']['type'];

switch($ext){

    case('image/jpeg'):

        header("Content-type: ".$ext);
        readfile($filename);
        break;

    case('image/png'):

        header('Content-type: '.$ext);

        readfile($filename);
        break;

    default:

        echo $filename. ' ' . $ext . ' ' . $filesize;

        break;
}
