
<?php
session_start();

include "class.php";
$class = new Crud();
$id =  $_SESSION['admin']['role'];
$query = "UPDATE users SET online='0' WHERE role='$role'";

$sql = $class->con->query($query);

if($sql){
    header("location: ../login/Login.php");
    session_destroy();
}


?>