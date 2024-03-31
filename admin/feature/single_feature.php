<?php
session_start();
require_once "../db.php";

$id= $_GET ['id'];
if($id && (int) $id){



$query = " SELECT id,title,description,banner,status FROM `features` WHERE id = $id";
$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) > 0)
{
    $data = mysqli_fetch_assoc($result);
}


}
else
{
    header('Location:404.php');
}



include "../view/feature/single_feature.view.php";