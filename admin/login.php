<?php

session_start();

require "db.php";

$error=[];
if(isset($_POST['submit']))
{
 
   $email = trim(htmlentities($_POST['email']));
   $password = trim(htmlentities($_POST['password']));
   $encpass = md5($password);
  

   
 
   if(empty($email))
   {
    $error['emailerror']="Enter Your Email!";
   }
   elseif(!filter_var($email, FILTER_VALIDATE_EMAIL))
   
   
    {
        $error['emailerror']="Enter Your valid Email!"; 
    }


    if(empty( $password))
    {
     $error['passerror']="Enter Your Password!";
    }
    
 
   

   
   if(empty($error))
   {
    $selectQuery = " SELECT id,name,email,status,created_at,photo FROM `user` WHERE email = '$email' AND password='$encpass' ";
    $selectResult = mysqli_query($conn, $selectQuery);
    
    if(mysqli_num_rows($selectResult) > 0)
    {
        $data = mysqli_fetch_assoc($selectResult);
        $_SESSION['auth']=$data;
        header('Location:index.php');
      
    }else{
        $_SESSION['successMessage']="login failed!";
       
       
    }
   }
}

include_once 'view/auth/login.view.php';
