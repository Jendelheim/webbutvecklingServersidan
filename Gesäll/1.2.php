<?php
/**
 * Created by PhpStorm.
 * User: Victor
 * Date: 2018-05-18
 * Time: 00:48
 */


include __DIR__ . "/../Gesäll/GifCreator.php";

use GifCreator\GifCreator;



$frames = array(

    $image = imagecreatefrompng($_FILES['file1']['tmp_name']),
    $image = imagecreatefrompng($_FILES['file2']['tmp_name']),
    $image = imagecreatefrompng($_FILES['file3']['tmp_name'])

);

// Create an array containing the duration (in millisecond) of each frames (in order too)
$durations = array(40, 80, 40);

// Initialize and create the GIF !
$gc = new GifCreator();
$gc->create($frames, $durations, 5);


$gifBinary = $gc->getGif();

header('Content-type: image/gif');
echo $gifBinary;