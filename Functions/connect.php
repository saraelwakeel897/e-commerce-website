<?php
$server ='localhost';
$user ='root';
$pass ='';
$db ='phpoop';

$connect =mysqli_connect($server, $user, $pass, $db)
    or die("Could not connect to server...\n".mysqli_error());
/*mysqli_select_db($db)
    or die("Could not connect to database...\n".mysql_error());*/
?>