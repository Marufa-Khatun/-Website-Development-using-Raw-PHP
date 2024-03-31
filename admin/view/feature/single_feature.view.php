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
                        <p> Banner-
                                <?php if($data['banner']){?>
                                <img src="../../uploads/features/<?=$data['banner']?>" alt="<?=$data['banner']?>" width="60">
                                <?php
                                }else{
                                    echo "--";
                                }
                                ?>
                           </p>    
                        <p>Status-<?=$data['status'] == 1 ? "Active": "Deactive"?></p>
                        </div>
                        </div>
                     
            <div>
                <a href="all_feature.php" class="btn btn-primary ">Back</a>
            </div>
            </div> 
         </div>  
    </div>
   </section>

   <?php 
  include_once "../view/layouts/footer.view.php";
?>