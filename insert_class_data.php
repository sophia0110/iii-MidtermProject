<?php
require_once("db_connect.php");
ini_set('date.timezone','Asia/Taipei');
$stmt = $conn->prepare("INSERT INTO class(class_name,class_teacher,class_type,class_content,class_open_num,class_price,class_week,class_time_s,class_time_e,class_times,class_place,class_item,class_deadline_date,class_start_date,class_end_date,class_add_date,class_change_date,class_valid) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
$stmt->bind_param("ssssissssisssssssi",$class_name,$class_teacher,$class_type_list,$class_content,$class_open_num,$class_price,$class_week,$class_time_s,$class_time_e,$class_times,$class_place,$class_item_list,$class_deadline_date,$class_start_date,$class_end_date,$class_add_date,$class_change_date,$class_valid);

$now=date('Y-m-d H:i:s');




$class_name=$_POST["class_name"];
$class_teacher=$_POST["class_teacher"];
$class_type=$_POST["class_type"];
$class_content=$_POST["class_content"];
$class_open_num=$_POST["class_open_num"];
$class_price=$_POST["class_price"];
$class_week=$_POST["class_week"];
$class_time_s=$_POST["class_time_s"];
$class_time_e=$_POST["class_time_e"];
$class_times=$_POST["class_times"];
$class_place=$_POST["class_place"];
$class_item =$_POST["class_item"];
$class_deadline_date=$_POST["class_deadline_date"];
$class_start_date=$_POST["class_start_date"];
$class_end_date=$_POST["class_end_date"];
$class_add_date=$now;
$class_change_date=$now;

$class_valid=1;


$class_type_list=implode("、",$_POST["class_type"]);
echo $class_type_list;

$class_item_list=implode(",",$_POST["class_item"]);
echo $class_item_list;
//foreach ($class_type as $value){
//    if($value==""){
//        continue;
//    }
//    echo $value.",";


//$arr1=$class_type;
//$class_type_output = implode(",",$arr1);
//echo $class_type_output;



//
//foreach ($class_item as $value){
//    if($value==""){
//        continue;
//    }
//    echo $value.",";
//
//}

//$arr2=$class_item ;
//$item_output = implode(",",$arr2);
//echo $item_output;


$stmt->execute();

$stmt->close();
$conn->close();
header("Location:class.php");








