<?php
session_start();


require "../db.php";

$id= $_GET ['id'];
if($id && (int) $id){

    
$selectQuery = " SELECT `id`, `title`, `description`, `btn_txt`, `btn_url`, `status`, `created_at` FROM `banners`  WHERE id = $id";
$selectResult = mysqli_query($conn, $selectQuery);

if(mysqli_num_rows($selectResult) > 0)
{
    $data = mysqli_fetch_assoc($selectResult);
}




//Delete Query
 $query = "DELETE FROM   `banners` WHERE id = $id";
$result = mysqli_query($conn, $query);

if(($result) )
{
    header('Location:all_banner.php');
}

}
else
{
    header('Location:404.php');
}
