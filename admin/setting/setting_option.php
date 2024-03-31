<?php
session_start();
require_once "../db.php";

//select whyus query...

$selectQuery="SELECT * FROM `setting_options` ";
$selectResult=mysqli_query($conn, $selectQuery);
if(mysqli_num_rows($selectResult)>0)
{
    $data=mysqli_fetch_assoc($selectResult);
}



//update whyus query...

$error=[];
if(isset($_POST['submit']))
{
   $banner = $_FILES['banner'];
   $aboutTitle = trim(htmlentities($_POST['title']));
   $aboutDescription = trim(htmlentities($_POST['about_des']));
   $testimonialHeading = trim(htmlentities($_POST['tst_heading']));
   $testimonialDes = trim(htmlentities($_POST['tst_description']));
   $priceHeading = trim(htmlentities($_POST['price_heading']));
   $priceDescription = trim(htmlentities($_POST['price_description']));
   $contactAddress = trim(htmlentities($_POST['contact_address']));
   $contactEmail = trim(htmlentities($_POST['email']));
   $contactEmail2 = trim(htmlentities($_POST['email2']));
   $contactPhone = trim(htmlentities($_POST['phone']));
   $contactPhone2 = trim(htmlentities($_POST['phone2']));
   
   if($banner['name'])
   {
       $type = ['png', 'jpg', 'jpeg', 'gif','svg'];
       $fileextension = explode ('.', $banner['name']);
       if(!in_array(end($fileextension),$type))
       {
           $error['fileError'] = "upload png, jpg, jpeg, svg or gif image only!";

       }
       elseif($banner['size'] > 1000000)
       {
           $error['fileError'] = "upload 1 megabyte image only!";
       }
       else
       {
           $path="../../uploads/setting_options/".$data['about_banner'];

       if(file_exists($path) && $data['about_banner'])
       {
        unlink($path);
       }

           $imageName = uniqid().'.'. end($fileextension);
           move_uploaded_file($banner['tmp_name'], '../../uploads/setting_options/'.$imageName);
       }
   }
       else
       {
           $imageName = $data['about_banner'];
       }  




   if(empty($aboutTitle))
   {
       $error['titleError']="Enter your Title!";
   }
   
   if(empty($aboutDescription))
   {
       $error['desError']="Enter your Description!";
   }
   
   if(empty($testimonialHeading))
   {
       $error['tstError']="Enter your Testimonial Heading!";
   }
   
   if(empty($testimonialDes))
   {
       $error['tstdError']="Enter your Testimonial Description!";
   }
   
   if(empty($priceHeading))
   {
       $error['priceError']="Enter your Pricing Heading!";
   }
   if(empty($priceDescription))
   {
       $error['pricedError']="Enter yourpricing Description!";
   }
   if(empty($contactAddress))
   {
       $error['contError']="Enter your Contact Address!";
   }



   if(empty($contactEmail))
   {
       $error['emailError']="Enter your first Email !";
   }
   elseif(!filter_var($contactEmail, FILTER_VALIDATE_EMAIL))
   {
      $error['emailError']="Enter Your valid Email!"; 
   }




   if(empty($contactEmail2))
   {
       $error['email2Error']="Enter your first Email !";
   }
   elseif(!filter_var($contactEmail2, FILTER_VALIDATE_EMAIL))
   {
      $error['email2Error']="Enter Your valid Email!"; 
   }



   if(empty($contactPhone))
   {
       $error['phnError']="Enter your first contact number!";
   }
   if(empty($contactPhone2))
   {
       $error['phn2Error']="Enter your second contact number!";
   }

   if(empty($error))
   {
    $updateQuery = "UPDATE `setting_options` SET `about_banner`='$imageName',`about_title`='$aboutTitle',`about_description`='$aboutDescription',`testimonial_heading`='$testimonialHeading',`testimonial_description`='$testimonialDes',`pricing_heading`='$priceHeading',`pricing_description`='$priceDescription',`contact_address`='$contactAddress',`email`='$contactEmail',`email2`='$contactEmail2',`phone`='$contactPhone',`phone2`='$contactPhone2'  ";
    $updateResult = mysqli_query($conn, $updateQuery);

    if($updateResult){
        $_SESSION['successMessage'] = "setting Options Update Successfully";
        header('Location:setting_option.php');
    }else{
        $_SESSION['error']=$error;
        header('Location:setting_option.php');

    }
   }
}

   







include_once "../view/setting/setting_option.view.php";








?>