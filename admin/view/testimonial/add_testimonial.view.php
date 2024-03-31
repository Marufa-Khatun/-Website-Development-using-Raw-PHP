<?php
    include_once '../view/layouts/header.view.php';
?>          
            
              <div class="row">
                <div class="col-md-12 col-sm-12 ">
                
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Add Testimonial</h2>
                      <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                       
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                      </ul>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                      <div class="dashboard-widget-content">
                      <form action="<?=adminUrl()?>/testimonial/add_testimonial.php" method="POST" enctype="multipart/form-data" class="form-horizontal form-label-left __web-inspector-hide-shortcut__" >
                      
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" >Profile</label>
                        <div class="col-md-6 col-sm-6 ">
                        <input type="file"  name="profile"   class="form-control ">
                       
                          <?php
                          if(isset($error['fileError'])){
                            printf("<p class='text-danger'> %s</p>",$error['fileError']);
                          }
                          ?>
                         
                        </div>
                      </div>



                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" >Name</label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text"  name="name"  class="form-control ">
                          <?php
                          if(isset($error['nameError'])){
                            printf("<p class='text-danger'> %s</p>",$error['nameError']);
                          }
                          ?>
                        </div>
                      </div>


                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" >Designation</label>
                        <div class="col-md-6 col-sm-6 ">
                         <input type="text" name="designation"  rows="5" class="form-control ">
                         <?php
                          if(isset($error['desigError'])){
                            printf("<p class='text-danger'> %s</p>",$error['desigError']);
                          }
                          ?>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" >Description</label>
                        <div class="col-md-6 col-sm-6 ">
                         <textarea  name="description"  rows="5" class="form-control summernote"></textarea>
                         <?php
                          if(isset($error['desError'])){
                            printf("<p class='text-danger'> %s</p>",$error['desError']);
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