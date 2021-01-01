<?php
require_once("db_connect.php");
$class_id=$_POST["class_id"];
$getData="SELECT * FROM class WHERE class_id=$class_id";
$result_getData=$conn->query($getData);
//var_dump($result_getData);

$row=$result_getData->fetch_assoc();
    $arr=array(
        "id"=>$row["class_id"],
        "name"=>$row["class_name"],
        "teacher"=>$row["class_teacher"],
        "type"=>$row["class_type"],
        "content"=>$row["class_content"],
        "open_num"=>$row["class_open_num"],
        "price"=>$row["class_price"],
        "class_week"=>$row["class_week"],
        "class_time_s"=>$row["class_time_s"],
        "class_time_e"=>$row["class_time_e"],
        "times"=>$row["class_times"],
        "place"=>$row["class_place"],
        "item"=>$row["class_item"],
        "deadline_date"=>$row["class_deadline_date"],
        "start_date"=>$row["class_start_date"],
        "end_date"=>$row["class_end_date"],
        "add_date"=>$row["class_add_date"],
        "change_date"=>$row["class_change_date"]
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