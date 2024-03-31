<?php
session_start();

require "../db.php";

$id= $_GET ['id'];
if($id && (int) $id){
  
$Query = "SELECT `id`, `title`, `description`, `box_color`, `box_icon`, `status` FROM `services`  WHERE id = $id";
$Result = mysqli_query($conn, $Query);

if(mysqli_num_rows($Result) > 0)
{
    $data = mysqli_fetch_assoc($Result);
}

//Delete Query
 $query = "DELETE FROM   `services` WHERE id = $id";
$result = mysqli_query($conn, $query);

if(($result) )
{
    header('Location:all_service.php');
}

}
else
{
    header('Location:404.php');
}
