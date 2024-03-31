<?php
session_start();
require "../db.php";


$id= $_GET ['id'];
if($id && (int) $id){


//select service
$query = " SELECT title,description,box_icon,box_color FROM `services` WHERE id = $id";
$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) > 0)
{
    $data = mysqli_fetch_assoc($result);
}


else
{
    header('Location:404.php');
}
}
//update service

$error=[];
if(isset($_POST['submit']))
{
   $title = trim(htmlentities($_POST['title']));
   $description = trim(htmlentities($_POST['description']));
   $icon = trim(htmlentities($_POST['icon']));
   $box_color =$_FILES['box_color'];
 
  

if(empty($title)){
 $error['titleError']="Enter your title";

}else if(strlen($title)>20)
{
    $error['titleError']="Title must be less then 20 character ";  
}


if(empty($description))
{
    $error['desError']="Enter your description";
}
else if(strlen($description)>50)
{
    $error['desError']="description must be less then 50 character ";  
}


if(empty($icon)){
    $error['iconError']="Select your icon";
}


if(empty($box_color)){
    $error['colorError']="Enter your box_color";
}


   
   if(empty($error))
   {
    $updateQuery = "UPDATE `services` SET `title`=' $title',`description`='$description',`box_icon`='$icon', `box_color`='$box_color' WHERE id=$id";
    $updateResult = mysqli_query($conn, $updateQuery);

    if($updateResult){
        $_SESSION['successMessage'] = "Service Update Successfully";
        header('Location:all_service.php');
    }else{
        $_SESSION['error']=$error;
        header('Location:../view/service/edit_service.view.php');

    }
   }
}

   



include_once '../view/service/edit_service.view.php';





?>