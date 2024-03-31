<?php
session_start();
require "../db.php";


$id= $_GET ['id'];
if($id && (int) $id){


//select banner
$query = " SELECT title,description,banner FROM `features` WHERE id = $id";
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
   $banner = $_FILES['banner'];
   
  

   if(empty($title))
   {
    $error['titleError']="Enter Your Title!";
   }

   
   if(empty($description))
   {
    $error['desError']="Enter Your Description!";
   }


   if($banner['name'])
   {
       $type = ['png', 'jpg', 'jpeg', 'gif','svg'];
       $fileextension = explode ('.', $banner['name']);
       if(!in_array(end($fileextension),$type))
       {
           $error['fileError'] = "upload png, jpg, jpeg or gif image only!";

       }
       elseif($photo['size'] > 1000000)
       {
           $error['fileError'] = "upload 1 megabyte image only!";
       }
       else
       {
           $path="../../uploads/features/".$data['photo'];

       if(file_exists($path) && $data['photo'])
       {
        unlink($path);
       }

           $imageName = uniqid().'.'. end($fileextension);
           move_uploaded_file($banner['tmp_name'], '../../uploads/features/'.$imageName);
       }
   }
       else
       {
           $imageName = $data['photo'];
       }
   



   
   if(empty($error))
   {
    $updateQuery = "UPDATE `Features` SET `title`=' $title',`description`='$description',`banner`='$imageName' WHERE id=$id";
    $updateResult = mysqli_query($conn, $updateQuery);

    if($updateResult){
        $_SESSION['successMessage'] = "Feature Update Successfully";
        header('Location:all_feature.php');
    }else{
        $_SESSION['error']=$error;
        header('Location:../view/feature/edit_feature.view.php');

    }
   }
}

   



include_once '../view/feature/edit_feature.view.php';





?>