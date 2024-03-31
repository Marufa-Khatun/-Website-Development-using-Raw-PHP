<?php
  session_start();
require_once '../db.php';

$error=[];

if(isset($_POST['submit'])){
    $banner = $_FILES['banner'];
    $title=trim(htmlentities($_POST['title']));
    $description=trim(htmlentities($_POST['description']));
   

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
            move_uploaded_file($banner['tmp_name'], '../../uploads/service_details/'.$imageName);
        }
    }
        else
        {
            $error['fileError'] = "Enter Your Image here.!";
        }




    if(empty($title)){
    $error['titleError']="Enter your Title";
       
    }

   

    if(empty($description))
    {
        $error['desError']="Enter your description";
    }
    


   

    
    if(empty($error)){
        $query="INSERT INTO `service_details`( `banner`,`title`, `description`) 
        VALUES ('$imageName','$title','$description')";

        $result=mysqli_query($conn,$query);

        if($result){
        $_SESSION['success']="service_details Added Successfully";
        header('Location:add_serviceDetails.php');

    }
    else
    {
        $_SESSION['error']="service_details Fail to add";
        header('Location:add_serviceDetails.php');
      
    }

}}

include_once "../view/service_details/add_serviceDetails.view.php";





?>