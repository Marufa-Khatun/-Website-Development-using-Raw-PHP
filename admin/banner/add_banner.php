<?php
  session_start();
require_once '../db.php';

$error=[];

if(isset($_POST['submit'])){
    $title=trim(htmlentities($_POST['title']));
    $description=trim(htmlentities($_POST['description']));
    $btn_txt=trim(htmlentities($_POST['btn_txt']));
    $btn_url=trim(htmlentities($_POST['btn_url']));


    if(empty($title)){
        $error['titleError']="Enter Your Banner Title!";
    } 
    
    if(empty($error)){
        $query="INSERT INTO `banners`( `title`, `description`, `btn_txt`, `btn_url`) 
        VALUES ('$title','$description','$btn_txt','$btn_url')";

        $result=mysqli_query($conn,$query);

        if($result){
        $_SESSION['success']="Banner Added Successfully";
        header('Location:all_banner.php');
    }else{
        $_SESSION['error']=$error;
        header('Location:../view/banner/add_banner.view.php');
      
    }

}}


include_once "../view/banner/add_banner.view.php";





?>