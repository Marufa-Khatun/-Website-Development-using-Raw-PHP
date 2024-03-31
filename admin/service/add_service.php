<?php
session_start();
require_once "../db.php";
$error=[];
if(isset($_POST['submit'])){
    $title=trim(htmlentities($_POST['title']));
    $description=trim(htmlentities($_POST['description']));
    $box_color=$_POST['box_color'];
    $icon=trim(htmlentities($_POST['icon']));
   

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

    if(empty($box_color)){
        $error['colorError']="Enter your box_color";
    }


    if(empty($icon)){
        $error['iconError']="Select your icon";
    }


   

    

    if(empty($error)){
        $query="INSERT INTO `services`(`title`, `description`, `box_color`, `box_icon`) VALUES ('$title','$description','$box_color','$icon')";
        $result=mysqli_query($conn,$query);
        if($result){
            $_SESSION['successMessage']="Service Added successfully";
           
        }
        else
        {
            $_SESSION['errorMessage']="Service not Inserted";
           
        }
    
    }
}

include_once "../view/service/add_service.view.php";