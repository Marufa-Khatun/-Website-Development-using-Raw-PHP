<?php
  session_start();
require_once '../db.php';

$error=[];

if(isset($_POST['submit'])){
    $title=trim(htmlentities($_POST['title']));
    $description=trim(htmlentities($_POST['description']));
    $banner = $_FILES['banner'];


    if(empty($title)){
    $error['titleError']="Enter your title";
       
    }


    if(empty($description))
    {
        $error['desError']="Enter your description";
    }
    


    if($banner['name'])
   {
       $type = ['png', 'jpg', 'jpeg', 'gif','svg'];
       $fileextension = explode ('.', $banner['name']);

       if(!in_array(end($fileextension),$type))
       {
           $error['fileError'] = "upload png, jpg, jpeg,svg or gif image only!";

       }
       elseif($banner['size'] > 1000000)
       {
           $error['fileError'] = "upload 1 megabyte image only!";
       }
       else
       {
          $imageName = uniqid().'.'. end($fileextension);
           move_uploaded_file($banner['tmp_name'], '../../uploads/features/'.$imageName);
       }
   }
       else
       {
           $error['fileError'] = "Enter Your Image here.!";
       }

    
    if(empty($error)){
        $query="INSERT INTO `features`( `title`, `description`, `banner`) 
        VALUES ('$title','$description','$imageName')";

        $result=mysqli_query($conn,$query);

        if($result){
        $_SESSION['success']="Feature Added Successfully";
        header('Location:all_feature.php');

    }
    else
    {
        $_SESSION['error']=$error;
        header('Location:../view/feature/add_feature.view.php');
      
    }

}}

include_once "../view/feature/add_feature.view.php";





?>