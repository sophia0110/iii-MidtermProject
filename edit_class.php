<?php
require_once("db_connect.php");
ini_set('date.timezone','Asia/Taipei');

$class_id=$_POST["class_id"];
$getData="SELECT * FROM class WHERE class_id=$class_id";
$result_getData=$conn->query($getData);
//var_dump($result_getData);

$row=$result_getData->fetch_assoc();
    $arr=array(
        "class_id"=>$row["class_id"],
        "class_name"=>$row["class_name"],
        "class_teacher"=>$row["class_teacher"],
        "class_type"=>$row["class_type"],
        "class_content"=>$row["class_content"],
        "class_open_num"=>$row["class_open_num"],
        "class_price"=>$row["class_price"],
        "class_week"=>$row["class_week"],
        "class_time_s"=>$row["class_time_s"],
        "class_time_e"=>$row["class_time_e"],
        "class_times"=>$row["class_times"],
        "class_place"=>$row["class_place"],
        "class_item"=>$row["class_item"],
        "class_deadline_date"=>$row["class_deadline_date"],
        "class_start_date"=>$row["class_start_date"],
        "class_end_date"=>$row["class_end_date"],
        "class_change_date"=>$row["class_change_date"]
//        $now=date('Y-m-d H:i:s');



    );

echo json_encode($arr);
//"class_change_date"=$now;








//
//
//$stmt->execute();
//
//$stmt->close();
//$conn->close();
//header("Location:class.php");