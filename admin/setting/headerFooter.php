<?php
session_start();
require "../db.php";





//select setting

$selectQuery="SELECT * FROM `theme_options` WHERE status=1 ORDER BY 1 DESC LIMIT 1";
$selectResult=mysqli_query($conn, $selectQuery);
if(mysqli_num_rows($selectResult)>0)
{
    $data=mysqli_fetch_assoc($selectResult);
}


//update setting

$error=[];
if(isset($_POST['submit']))
{
   $headerLogo = trim(htmlentities($_POST['logo']));
   $headerBanner = $_FILES['header_banner'];
   $footerAddress =  trim(htmlentities($_POST['address']));
   $footerPhone = trim(htmlentities($_POST['phone']));
   $footerEmail = trim(htmlentities($_POST['email']));
   $footerAbout = trim(htmlentities($_POST['about']));
   $footer_copy = trim(htmlentities($_POST['copy']));
   $newsTitle = trim(htmlentities($_POST['news_title']));
   $newsDescription = trim(htmlentities($_POST['news_description']));

    
   if(empty($headerLogo))
   {
    $error['logoError']="Enter Your Header Logo!";
   }
  

   

       if($headerBanner['name'])
       {
           $type = ['png', 'jpg', 'jpeg', 'gif','svg'];
           $fileextension = explode ('.', $headerBanner['name']);
           if(!in_array(end($fileextension),$type))
           {
               $error['fileError'] = "upload png, jpg, jpeg,svg or gif image only!";
    
           }
           elseif($headerBanner['size'] > 1000000)
           {
               $error['fileError'] = "upload 1 megabyte image only!";
           }
           else
           {
               $path="../../uploads/setting/".$data['header_banner'];
    
           if(file_exists($path) && $data['header_banner'])
           {
            unlink($path);
           }
    
               $imageName = uniqid().'.'. end($fileextension);
               move_uploaded_file($headerBanner['tmp_name'], '../../uploads/setting/'.$imageName);
           }
       }
           else
           {
               $imageName = $data['header_banner'];
           }
       
    
    



   
   if(empty($footerAddress))
   {
    $error['addressError']="Enter Your Footer Address!";
   }

   if(empty($footerPhone))
   {
    $error['phoneError']="Enter Your Footer Phone!";
   }

   
   if(empty($footerEmail))
   {
    $error['emailError']="Enter Your Footer Email!";
   }
   

   if(empty($footerAbout))
   {
    $error['aboutError']="Enter Your Footer About!";
   }

   if(empty($footer_copy))
   {
    $error['copyError']="Enter Your Footer copyright!";
   }

   if(empty($newsTitle))
   {
    $error['newsError']="Enter Your News Title!";
   }

   if(empty($newsDescription))
   {
    $error['desError']="Enter Your News Description!";
   }

   
   if(empty($error))
   {
    $updateQuery = "UPDATE `theme_options` SET `header_logo`='$headerLogo',`header_banner`='$imageName',`footer_address`='$footerAddress',`footer_phone`='$footerPhone',`footer_email`='$footerEmail',`footer_about`='$footerAbout',`footer_copy`='$footer_copy',`news_title`='$newsTitle',`news_description`='$newsDescription' WHERE status=1";
    $updateResult = mysqli_query($conn, $updateQuery);

   
    if($updateResult){
        $_SESSION['successMessage'] = "Settings Update Successfully";
        header('Location:headerFooter.php');
    }else{
        $_SESSION['error']=$error;
        header('Location:Location:headerFooter.php');

    }
   }

}
   



include_once '../view/setting/headerFooter.view.php';





?>