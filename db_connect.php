<?php
$server_name="localhost";
$user_name="root";
$password="123456";
$db_name="class1";

$conn=new mysqli($server_name, $user_name, $password, $db_name);
if($conn->connect_error){
    die("連線錯誤" . $conn->connect_error);
}else{
//    echo"資料庫連線成功";
}

?>



