<?php
header('Content-type: text/plain');
foreach (getenv() as $key => $value) {
    echo "$key: $value\n";
}
//foreach ($_SERVER as $key => $value) {
//    echo "$key: $value\n";
//}
?>

<?php
//
///**
// * Created by PhpStorm.
// * User: Victo
// * Date: 2017-10-12
// * Time: 15:19
// */
//
//header('content-type: text/plain');
//
//
////$ipAdress = getenv('REMOTE_ADDR');
////
////echo $ipAdress;
//
////$array = array(getenv("PATH"));
//
//// print_r($array);
////echo '</pre>';
////
////foreach($array as $item){
////     echo $item;
////}
//
//
//foreach($_SERVER as $key => $s){
//    echo "$key : " , "$s\n";
//}
//
//echo "COUNTER!!! " , count($_SERVER);
//
//echo "\n SPLITTER!!!! \n";
//
////$fruits = array (
////    'fruits'  => array('a' => 'orange', 'b' => 'banana', 'c' => 'apple'),
////    "numbers" => array(1, 2, 3, 4, 5, 6),
////    "holes"   => array("first", 5 => "second", "third")
////);
//
//$enviorment_array = array(getenv());
//
//print_r($enviorment_array);
//
//
//echo "COUNTER!!! " , count($enviorment_array);
//
//echo "\n SPLITTER!!!! \n";
//
//
////echo '<prev>' , print_r($enviorment_array, true), '</prev>' ;
//
//foreach (getenv() as $key => $item){
//    echo "$key : " , "$item\n";
//}
//
//
//echo "COUNTER!!! " , count(getenv());
//
//echo "\n\n\n\n";
//print_r($_ENV);
//
//
////print_r($fruits['fruits']);
////
////print_r($fruits['numbers']);
////
////print_r($fruits['holes']);
////
////print_r($_SERVER);
////
////echo "\n ENVIR!! \n";
////
////print_r($_ENV);
//
//?>