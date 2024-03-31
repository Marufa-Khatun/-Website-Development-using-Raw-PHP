<?php
    include_once '../view/layouts/header.view.php';
?>          
            
              <div class="row">
                <div class="col-md-12 col-sm-12 ">
                
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Header & Footer Settings</h2>
                      <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                       
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                      </ul>
                      <div class="clearfix"></div>
                    </div>
                    <?php
                     if(isset($_SESSION['successMessage'])){
                    printf("<div class='alert alert-success'>%s</div>",$_SESSION['successMessage']);
                     }
                    unset($_SESSION['successMessage']);
                    ?>
                    <div class="x_content">
                      <div class="dashboard-widget-content">
                      <form action="" method="POST" enctype="multipart/form-data" class="form-horizontal form-label-left __web-inspector-hide-shortcut__" >
                      
                      <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" >Header_Logo</label>
                      <div class="col-md-6 col-sm-6 ">
                          <input type="text"  name="logo" value="<?=$data['header_logo']?>"  class="form-control ">
                          <?php
                          if(isset($_SESSION['error']['logoError'])){
                            printf("<p class='text-danger'> %s</p>",$_SESSION['error']['logoError']);
                          }
                          ?>
                        </div>
                      </div>


                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" >Header_Banner</label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="file"  name="header_banner" class="form-control ">
                          <img src="<?=$data['header_banner']?>" alt="" width="100">
                          <?php
                          if(isset($_SESSION['error']['bannerError'])){
                            printf("<p class='text-danger'> %s</p>",$_SESSION['error']['bannerError']);
                          }
                          ?>
                        </div>
                      </div>
                      
                     

                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" >Footer_address</label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text"  name="address" value="<?=$data['footer_address']?>" class="form-control ">
                          <?php
                          if(isset($_SESSION['error']['addressError'])){
                            printf("<p class='text-danger'> %s</p>",$_SESSION['error']['addressError']);
                          }
                          ?>
                        </div>
                      </div>

                      
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" >Footer_phone</label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text"  name="phone" value="<?=$data['footer_phone']?>"  class="form-control ">
                          <?php
                          if(isset($_SESSION['error']['phoneError'])){
                            printf("<p class='text-danger'> %s</p>",$_SESSION['error']['phoneError']);
                          }
                          ?>
                        </div>
                      </div>

                      
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" >Footer_email</label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text"  name="email" value="<?=$data['footer_email']?>"  class="form-control ">
                          <?php
                          if(isset($_SESSION['error']['emailError'])){
                            printf("<p class='text-danger'> %s</p>",$_SESSION['error']['emailError']);
                          }
                          ?>
                        </div>
                      </div>

                      
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" >Footer_About</label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text"  name="about" value="<?=$data['footer_about']?>"  class="form-control ">
                          <?php
                          if(isset($_SESSION['error']['aboutError'])){
                            printf("<p class='text-danger'> %s</p>",$_SESSION['error']['aboutError']);
                          }
                          ?>
                        </div>
                      </div>

                      
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" >Footer_copy</label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text"  name="copy" value="<?=$data['footer_copy']?>"  class="form-control ">
                          <?php
                          if(isset($_SESSION['error']['copyError'])){
                            printf("<p class='text-danger'> %s</p>",$_SESSION['error']['copyError']);
                          }
                          ?>
                        </div>
                      </div>

                      
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" >News_title</label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text"  name="news_title" value="<?=$data['news_title']?>"  class="form-control ">
                          <?php
                          if(isset($_SESSION['error']['newsError'])){
                            printf("<p class='text-danger'> %s</p>",$_SESSION['error']['newsError']);
                          }
                          ?>
                        </div>
                      </div>


                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" >News_description</label>
                        <div class="col-md-6 col-sm-6 ">
                         <textarea  name="news_description" rows="5" class="form-control"><?=$data['news_description']?></textarea>

                         <?php
                          if(isset($_SESSION['error']['desError'])){
                            printf("<p class='text-danger'> %s</p>",$_SESSION['error']['desError']);
                          }
                          ?>

                        </div>
                      </div>

                     

                      <div class="ln_solid"></div>
                      <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                          <button class="btn btn-primary" type="button">Cancel</button>
                          <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" name="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>

                      </form>
                           
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
           
 <?php
    include_once '../view/layouts/footer.view.php';
    unset($_SESSION['error']);
?> 