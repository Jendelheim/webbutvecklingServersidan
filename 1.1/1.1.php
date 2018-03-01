<?php
/**
 * Created by PhpStorm.
 * User: Victo
 * Date: 2017-10-12
 * Time: 12:42
 */

// Task - "Säker filhantering"


header('content-type: text/plain');

// Opens txt-file or gives error message if txt-file is not found
if(!$counterfile = @fopen("counter.txt", "r+"))
    $counterfile = @fopen("counter.txt", "w+");

// Locks file so the file is only editable by the current visitor.
flock ($counterfile, LOCK_EX);


$currentNumber = (int)fgets($counterfile);

// Increments the value
++$currentNumber;

ftruncate($counterfile, 0);

rewind($counterfile);

fputs($counterfile, $currentNumber);



echo "Visitors: " . $currentNumber;
    
fclose($counterfile);
?>

