<?php
require_once("db_connect.php");
$class_id=$_POST["delID"];
$sql = "UPDATE class SET class_valid=0 WHERE class_id=$class_id";
$result=$conn->query($sql);


$conn->close();

?>


