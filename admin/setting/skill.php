<?php
session_start();
require "../db.php";





//select setting

$selectQuery="SELECT * FROM `skill_element` WHERE status=1 ORDER BY 1 DESC LIMIT 1";
$selectResult=mysqli_query($conn, $selectQuery);
if(mysqli_num_rows($selectResult)>0)
{
    $data=mysqli_fetch_assoc($selectResult);
}


//update setting

$error=[];
if(isset($_POST['submit']))
{
  
   $featureHeading = trim(htmlentities($_POST['fheading']));
   $featureDescription = trim(htmlentities($_POST['fdescription']));
   $skillHeading = trim(htmlentities($_POST['sheading']));
   $skillDescription = trim(htmlentities($_POST['sdescription']));
   $skill1 = trim(htmlentities($_POST['skill1']));
   $skill2 = trim(htmlentities($_POST['skill2']));
   $skill3 = trim(htmlentities($_POST['skill3']));
   $skill4 = trim(htmlentities($_POST['skill4']));
   $skill_p_1 = trim(htmlentities($_POST['skill5']));
   $skill_p_2 = trim(htmlentities($_POST['skill6']));
   $skill_p_3 = trim(htmlentities($_POST['skill7']));
   $skill_p_4 = trim(htmlentities($_POST['skill8']));

   if(empty($featureHeading))
   {
    $error['fhError']="Enter Your Feature Heading!";
   }

   if(empty($featureDescription))
   {
    $error['fdError']="Enter Your Feature Description!";
   }

   
   if(empty($skillHeading))
   {
    $error['shError']="Enter Your skill Heading!";
   }
   

   if(empty($skillDescription))
   {
    $error['sdError']="Enter Your skill Description!";
   }

   



   if(empty($error))
   {
    $updateQuery = "UPDATE `skill_element` SET `feature_heading`='$featureHeading',`feature_description`='$featureDescription',`skill_heading`='$skillHeading',`skill_description`='$skillDescription',`skill_1`='$skill1',`skill_2`='$skill2',`skill_3`='$skill3',`skill_4`='$skill4',`skill_%_1`='$skill_p_1',`skill_%_2`='$skill_p_2',`skill_%_3`='$skill_p_3',`skill_%_4`='$skill_p_4' WHERE status=1";
    $updateResult = mysqli_query($conn, $updateQuery);

   
    if($updateResult){
        $_SESSION['successMessage'] = "Settings Update Successfully";
        header('Location:skill.php');
    }else{
        $_SESSION['error']=$error;
        header('Location:Location:skill.php');

    }
   }

}
   



include_once '../view/setting/skill.view.php';





?>