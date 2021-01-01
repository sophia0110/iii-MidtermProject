<?php
require_once("db_connect.php");
ini_set('date.timezone','Asia/Taipei');
$now=date('Y-m-d H:i:s');
$class_id=$_POST["class_id"];
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
$class_change_date=$now;
$class_type_list=implode("、",$_POST["class_type"]);
echo $class_type_list;

$class_item_list=implode(",",$_POST["class_item"]);
echo $class_item_list;


$sql="UPDATE class SET  class_name ='$class_name',class_teacher='$class_teacher',class_type='$class_type_list',class_content='$class_content',class_open_num=$class_open_num,class_price=$class_price,class_week='$class_week',class_time_e='$class_time_e',class_times=$class_times,class_place='$class_place',class_item='$class_item_list',class_deadline_date='$class_deadline_date',class_start_date='$class_start_date',class_end_date='$class_end_date',class_change_date='$now'  WHERE class_id=$class_id ";













if($conn->query($sql)==TRUE){
    echo  "更新成功";
}else{
    echo "更新失敗".$conn->error;
}





$conn->close();
header("Location:class.php");
?>
