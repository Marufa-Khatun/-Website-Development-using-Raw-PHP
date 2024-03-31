<?php
  session_start();
require_once '../db.php';

$error=[];

if(isset($_POST['submit'])){
    $profile = $_FILES['profile'];
    $name=trim(htmlentities($_POST['name']));
    $designation=trim(htmlentities($_POST['designation']));
    $description=trim(htmlentities($_POST['description']));
   

    if($profile['name'])
    {
        $type = ['png', 'jpg', 'jpeg', 'gif','svg'];
        $fileextension = explode ('.', $profile['name']);
 
        if(!in_array(end($fileextension),$type))
        {
            $error['fileError'] = "upload png, jpg, jpeg,svg or gif image only!";
 
        }
        elseif($profile['size'] > 1000000)
        {
            $error['fileError'] = "upload 1 megabyte image only!";
        }
        else
        {
           $imageName = uniqid().'.'. end($fileextension);
            move_uploaded_file($profile['tmp_name'], '../../uploads/testimonial/'.$imageName);
        }
    }
        else
        {
            $error['fileError'] = "Enter Your Image here.!";
        }




    if(empty($name)){
    $error['nameError']="Enter your Name";
       
    }

    if(empty($designation))
    {
        $error['desError']="Enter your designation";
    }

    if(empty($description))
    {
        $error['desError']="Enter your description";
    }
    


   

    
    if(empty($error)){
        $query="INSERT INTO `testimonial`( `profile`,`name`, `designation`,`description`) 
        VALUES ('$imageName','$name','$designation','$description')";

        $result=mysqli_query($conn,$query);

        if($result){
        $_SESSION['success']="testimonial Added Successfully";
        header('Location:all_testimonial.php');

    }
    else
    {
        $_SESSION['error']="testimonial Fail to add";
        header('Location:add_testimonial.php');
      
    }

}}

include_once "../view/testimonial/add_testimonial.view.php";





?>