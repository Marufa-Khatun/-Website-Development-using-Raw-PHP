<?php
session_start();


require_once "../db.php";

$id= $_GET ['id'];
if($id && (int) $id){

    
$selectQuery = " SELECT id,status FROM `features` WHERE id = $id";
$selectResult = mysqli_query($conn, $selectQuery);

if(mysqli_num_rows($selectResult) > 0)
{
    $data = mysqli_fetch_assoc($selectResult);
}

if($data['status']==1){
    $query = "UPDATE `features` SET status=2 WHERE id = $id";
    $result = mysqli_query($conn, $query);
    header('Location:all_feature.php');
}else{
    $query = "UPDATE `features` SET status=1 WHERE id = $id";
    $result = mysqli_query($conn, $query);
    header('Location:all_feature.php');
}



}
else
{
    header('Location:404.php');
}
