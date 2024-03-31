<?php
require_once "../db.php";
session_start();

$query="SELECT `id`, `title`, `description`, `banner`,  `status`FROM `features`";
$result=mysqli_query($conn,$query);

if(mysqli_num_rows($result)>0){
    $datas=mysqli_fetch_all($result,true);
}


//search Queary..

if(isset($_POST['search'])){
    $search =trim(htmlentities($_POST['search']));
    $searcQuery=("SELECT * FROM features WHERE  id like '%$search%'   or title like   '%$search%'  or description like   '%$search%' ");
    $searchResult=mysqli_query($conn,$searcQuery);
    if(mysqli_num_rows($searchResult)>0){
        $datas=mysqli_fetch_all($searchResult,true);
    }else{
       $_SESSION['searchMessage']="Data Not Found!";
    }}

include_once '../view/feature/all_feature.view.php';