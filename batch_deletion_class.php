<?php
require_once("db_connect.php");
$deleteAllID=$_POST["deleteAllID"];
$data=array(
    "all"=> $deleteAllID
);

//echo json_encode($deleteAllID);

for($i=0;$i<count($deleteAllID);$i++){
    $id=$deleteAllID[$i];
    echo json_encode($id);
    $sql="UPDATE class SET class_valid=0 WHERE class_id=$id";
    $result=$conn->query($sql);
}

//$sql = "UPDATE class SET class_valid=0 WHERE class_id=$value";
////$stmt = $conn->prepare(" ");
////$stmt->bind_param();
//
//
////$data=array(
////    "arr"=>$arr
////);
////echo json_encode($data);
////
////    if (isset($_POST['submitdel'])) {
////        foreach ($_POST['classarr'] as $value) {
////            echo $value . "<br>";}
//
//
//
//$result=$conn->query($sql);
//
//
//$conn->close();
//
//
//
//
//}

?>