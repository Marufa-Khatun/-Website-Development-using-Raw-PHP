<?php

require_once "db.php";

$error=[];
if(isset($_POST['submit']))
{
   $name = trim(htmlentities($_POST['name']));
   $email = trim(htmlentities($_POST['email']));
   $password = trim(htmlentities($_POST['password']));
   $encpass = md5($password);
   $photo= $_FILES['photo'];
 
  


   if(empty($name))
   {
    $error['nameError']="Enter Your Name!";
   }
    elseif(strlen($name)>20){
    $error['nameError']="name must be less than 12 character";
   }

 

   if(empty($email))
   {
    $error['emailError']="Enter Your Email!";
   }
   elseif(!filter_var($email, FILTER_VALIDATE_EMAIL))
   
    {
        $error['emailError']="Enter Your valid Email!"; 
    }



    if(empty( $password))
    {
     $error['passError']="Enter Your Password!";
    }
    elseif(strlen($password)<6)
    {
        $error['passError']="password must be grether than 6 character";
    }

    if($photo['name'])
    {
        $type = ['png', 'jpg', 'jpeg', 'gif'];
        $fileextension = explode ('.', $photo['name']);
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
            $imageName = uniqid().'.'. end($fileextension);
            move_uploaded_file($photo['tmp_name'], 'uploads/profile/'.$imageName);
        }
    }
        else
        {
            $imageName = null;
        }
    





   if(empty($error))
   {
    $query = "INSERT INTO `user`( `name`, `email`, `password`, `photo`) VALUES ('$name','$email','$encpass', '$imageName')";
    $result = mysqli_query($conn, $query);

    if($result){
        $_SESSION['successMessage'] = "User Inserted Successfully";
       
    }else{
       $_SESSION['errorMessage'] = "User Insert Error";
    }
   } 

}
include "view/auth/sign_up.view.php";

