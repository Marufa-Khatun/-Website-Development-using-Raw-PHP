<?php
session_start();
require "../db.php";


$id= $_GET ['id'];
if($id && (int) $id){


//select banner
$query = " SELECT title,description,btn_txt,btn_url FROM `banners` WHERE id = $id";
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

//update banner

$error=[];
if(isset($_POST['submit']))
{
   $title = trim(htmlentities($_POST['title']));
   $description = trim(htmlentities($_POST['description']));
   $btn_txt = trim(htmlentities($_POST['btn_txt']));
   $btn_url = trim(htmlentities($_POST['btn_url']));
 
  

   if(empty($title))
   {
    $error['titleError']="Enter Your Title!";
   }


   
   if(empty($error))
   {
    $updateQuery = "UPDATE `banners` SET `title`=' $title',`description`='$description',`btn_txt`='$btn_txt',`btn_url`='$btn_url' WHERE id=$id";
    $updateResult = mysqli_query($conn, $updateQuery);

    if($updateResult){
        $_SESSION['successMessage'] = "Banner Update Successfully";
        header('Location:all_banner.php');
    }else{
        $_SESSION['error']=$error;
        header('Location:../view/banner/edit_banner.view.php');

    }
   }
}

   



include_once '../view/banner/edit_banner.view.php';





?>