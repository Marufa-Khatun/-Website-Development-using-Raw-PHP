<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gentelella Alela! |</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
  </head>

  <body class="text-bg-secondary">
   <section class="mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4">
            <?php 
            if(isset($_SESSION['successMessage'])){
                printf("<div class='alert alert-success'>%s</div>",$_SESSION['successMessage']);
            }
            unset($_SESSION['successMessage']);
            ?>

            <?php 
            if(isset($_SESSION['errorMessage'])){
                printf("<div class='alert alert-success'>%s</div>",$_SESSION['errorMessage']);
            }
            unset($_SESSION['errorMessage']);
            ?>
                <div class="card mt-5">
                    <div class="card-header"><img height="100"  src="../admin/images/signup-icon.jpg" alt="" > </div>
                        <div class="card-body">
                           
                            <form action="" method="POST" enctype="multipart/form-data" >
                                <div class="my-3">
                                    <input type="text" name="name" placeholder="Enter Your Name" class="form-control">
                                    <?php
                                        if(isset( $error['nameError']))
                                        {
                                         printf("<p class='text-danger'> %s </p>",  $error['nameError']) ;                              
                                        }
                                    ?>
                                </div>

                                <div class="my-3">
                                    <input type="text" name="email" placeholder="Enter Your Email" class="form-control">
                                    <?php
                                        if(isset($error['emailError']))
                                        {
                                         printf("<p class='text-danger'> %s </p>", $error['emailError']) ;                              
                                        }
                                    ?>
                                </div>

                                <div class="my-3">
                                    <input type="Password" name="password" placeholder="Enter Your Password" class="form-control">
                                    <?php
                                        if(isset($error['passError']))
                                        {
                                         printf("<p class='text-danger'> %s </p>", $error['passError']) ;                              
                                        }
                                    ?>
                                </div>
                                <div class="my-3">
                                    <input type="file" name="photo"  class="form-control">
                                    <?php
                                        if(isset($error['fileError']))
                                        {
                                         printf("<p class='text-danger'> %s </p>", $error['fileError']) ;                              
                                        }
                                    ?>
                                </div>
                                
                             
                                <div class="my-3">
                                   <button type="submit" name="submit" class="btn btn-sm btn-primary ">Submit</button>
                                </div>
                               

                            </form>
                           
                        
                            </div>
                   
                </div>
                <div class="mt-3">
                <a href="login.php" class="btn btn-primary ">Back</a>
                </div>


            </div>
           
        </div>

        


    </div>
    
   </section>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" ></script>
  </body>
</html>