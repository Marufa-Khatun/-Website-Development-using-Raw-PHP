<?php
session_start();
require_once "../db.php";

//select whyus query...

$selectQuery="SELECT * FROM `whyus` WHERE status=1 ORDER BY 1 DESC LIMIT 1";
$selectResult=mysqli_query($conn, $selectQuery);
if(mysqli_num_rows($selectResult)>0)
{
    $data=mysqli_fetch_assoc($selectResult);
}



//update whyus query...

$error=[];
if(isset($_POST['submit']))
{
   $icon_one = trim(htmlentities($_POST['icon_one']));
   $title_one = trim(htmlentities($_POST['title_one']));
   $description_one = trim(htmlentities($_POST['description_one']));
   $icon_two = trim(htmlentities($_POST['icon_two']));
   $title_two = trim(htmlentities($_POST['title_two']));
   $description_two = trim(htmlentities($_POST['description_two']));
   $vedio_link = trim(htmlentities($_POST['vedio_link']));
   $banner = $_FILES['banner'];

if(empty($icon_one)){
 $error['iconError']="Enter your Icon One";

}else if(strlen($icon_one)>20)
{
    $error['iconError']="Icon One must be less then 20 character ";  
}



if(empty($title_one))
{
    $error['title1Error']="Enter your Title One";
}
else if(strlen($title_one)>20)
{
    $error['title1Error']="Title One must be less then 20 character ";  
}




if(empty($description_one))
{
    $error['des1Error']="Enter your Description One";
}
else if(strlen($description_one)>300)
{
    $error['des1Error']="Description  One must be less then 300 character ";  
}


if(empty($icon_two)){
    $error['icon2Error']="Enter your Icon Two";
   
   }else if(strlen($icon_two)>20)
   {
       $error['icon2Error']="Icon Two must be less then 20 character ";  
   }
   
   
   
   if(empty($title_two))
   {
       $error['title2Error']="Enter your Title Two";
   }
   else if(strlen($title_two)>20)
   {
       $error['title2Error']="Title Two must be less then 20 character ";  
   }
   
   
   
   
   if(empty($description_two))
   {
       $error['des2Error']="Enter your Description Two";
   }
   else if(strlen($description_two)>300)
   {
       $error['des2Error']="Description  Two must be less then 300 character ";  
   }



   if(empty($vedio_link))
   {
       $error['linkError']="Enter your Vedio Link!";
   }
   else if(strlen($vedio_link)>50)
   {
       $error['linkError']="Vedio Link must be less then 50 character! ";  
   }



   if($banner['name'])
   {
       $type = ['png', 'jpg', 'jpeg', 'gif'];
       $fileextension = explode ('.', $banner['name']);
       if(!in_array(end($fileextension),$type))
       {
           $error['fileError'] = "upload png, jpg, jpeg or gif image only!";

       }
       elseif($banner['size'] > 1000000)
       {
           $error['fileError'] = "upload 1 megabyte image only!";
       }
       else
       {
           $path="../../uploads/whyus/".$data['banner'];

       if(file_exists($path) && $data['banner'])
       {
        unlink($path);
       }

           $imageName = uniqid().'.'. end($fileextension);
           move_uploaded_file($banner['tmp_name'], '../../uploads/whyus/'.$imageName);
       }
   }
       else
       {
           $imageName = $data['banner'];
       }
   


   


   
   if(empty($error))
   {
    $updateQuery = "UPDATE `whyus` SET `banner`='$imageName',`vedio_link`='$vedio_link',`icon_one`='$icon_one',`title_one`='$title_one',`description_one`='$description_one',`icon_two`='$icon_two',`title_two`='$title_two', `description_two`='$description_two' WHERE status=1 ";
    $updateResult = mysqli_query($conn, $updateQuery);

    if($updateResult){
        $_SESSION['successMessage'] = "Why Us Update Successfully";
        header('Location:whyus.php');
    }else{
        $_SESSION['error']=$error;
        header('Location:whyus.php');

    }
   }
}

   







include_once "../view/whyus/whyus_edit.view.php";








?>