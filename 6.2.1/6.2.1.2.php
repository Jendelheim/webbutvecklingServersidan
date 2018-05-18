<?php
/**
 * Created by PhpStorm.
 * User: Victor
 * Date: 2018-05-17
 * Time: 15:31
 */


$name = $_POST['name'];
$email = $_POST['email'];
$webpage = $_POST['webpage'];
$comment = $_POST['comment'];
$conn = databaseConnection();
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
function databaseConnection(){
    $mysql_host = 'atlas.dsv.su.se';
    $mysql_user = 'usr_17730744';
    $mysql_password = '730744';
    $mysql_db = 'db_17730744';
    $mysql_port = 3306;
    return @mysqli_connect($mysql_host, $mysql_user,$mysql_password, $mysql_db, $mysql_port);
}
$sql = "INSERT INTO guestList (name, email, webpage, comment) VALUES ('$name', '$email', '$webpage', '$comment')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header('location: 6.2.1.1.html');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}