<!DOCTYPE html>
<html lang="en">
  <head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gentelella Alela! | </title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/nprogress.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/custom.min.css" rel="stylesheet">

  </head>

  <body class="login">
  
                
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <?php
            if(isset($_SESSION['successMessage'])){
              printf("<div class='alert alert-success'>%s</div>",$_SESSION['successMessage']);
            }
            unset($_SESSION['successMessage']);
            ?>
          
            <form action="" method="POST">
              <h1>Login Form</h1>
              <div>
                <input type="text" name="email"  placeholder="Enter Your Email" class="form-control" />
                <?php
                if(isset($error['emailerror'])){
                    
                    printf("<p class='text-danger'> %s </p>", $error['emailerror']);
                }
                ?>
              </div>
              <div>
                <input type="password" name ="password" class="form-control" placeholder="Enter Your Password"  />
                <?php
                if(isset($error['passerror'])){

                    printf("<p class='text-danger'> %s </p>", $error['passerror']);
                }
                ?>
              </div>
              <div>
                <button type="submit" name="submit" class="btn btn-primary submit" >Log in</button>
                <a class="reset_pass" href="#">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
              
                  <a href="sign_up.php" class="to_register"> Create Account </a>
                </p>
              

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 4 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>

       
      </div>
    </div>
  </body>
</html>
