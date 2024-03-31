<?php 
 include_once "../view/layouts/header.view.php";
?>

  <body  class="text-bg-dark p-3">
   <section class="mt-5">
    <div class="container">
        <div class="row ">
            <div class="col-lg-8"> 
                <div class="card " >
                    <div class="card-header bg-primary"> <h2 style="color:white;">Single_View Page</h2></div>
                   
                    <div class="card-body bg-dark">
                         <h2>Id-<?=$data['id']?></h2>     
                         <h2>Title-<?=$data['title']?></h2>
                        <p> Description-<?=$data['description']?></p>
                        <p>Btn_txt-<?=$data['btn_txt']?></p>
                        <p>Btn_url-<?=$data['btn_url']?></p>
                        <p>Status-<?=$data['status'] == 1 ? "Active": "Deactive"?></p>
                        <p>Date-<?=$data['created_at']?></p>
                        </div>
                        </div>
                     
            <div>
                <a href="all_banner.php" class="btn btn-primary ">Back</a>
            </div>
            </div> 
         </div>  
    </div>
   </section>

   <?php 
  include_once "../view/layouts/footer.view.php";
?>