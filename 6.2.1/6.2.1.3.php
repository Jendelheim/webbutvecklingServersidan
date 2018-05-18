<?php
/**
 * Created by PhpStorm.
 * User: Victor
 * Date: 2018-05-17
 * Time: 15:31
 */

function databaseConnection(){
    $mysql_host = 'atlas.dsv.su.se';
    $mysql_user = 'usr_17730744';
    $mysql_password = '730744';
    $mysql_db = 'db_17730744';
    $mysql_port = 3306;
    return @mysqli_connect($mysql_host, $mysql_user,$mysql_password, $mysql_db, $mysql_port);
}
$conn = databaseConnection();

echo 'creating table.. ';

$conn->query("CREATE TABLE db_17730744.guestList (id int,  time TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP, name varchar(255), email varchar(255), webpage varchar(255), comment varchar(255))");
//$conn->query("DROP TABLE guestList");
echo 'hello, now table is created.';









$sql = "SELECT  id, time, name, email, webpage, comment FROM guestList";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $id = XSSProtection($row['id']);
        $time = XSSProtection($row['time']);
        $name = XSSProtection($row['name']);
        $email = XSSProtection($row['email']);
        $webpage = XSSProtection($row['webpage']);
        $comment = XSSProtection($row['comment']);
        echo '<p> <strong>Inlägg:</strong> ' . $id . '<br> <p>
    <strong>Tid:</strong> ' . $time . '<br>
    <strong>Från:</strong> <a href="'. $webpage . '">' . $name . '</a><br>
    <strong>E-post:</strong> <a href="mailto:' . $email . '">' . $email . '</a>
</p>
<p>
    <strong>Kommentar:</strong> ' . $comment . '
</p>
<form action="6.2.1.1.html">
<input type="submit" value="Tillbaka" name="name">
</form><hr>'
        ;
    }
} else {
    echo "Inget tillagt i databasen";
}
function XSSProtection($output){ //tar bort kod som kan ändra html outlay och scripts
    return htmlspecialchars(strip_tags($output));
}