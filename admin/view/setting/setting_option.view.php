<?php
    include_once '../view/layouts/header.view.php';
?>          
           
                
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Setting Options</h2>
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
                        <label class="col-form-label col-md-3 col-sm-3 label-align" >About_Banner</label>
                        <div class="col-md-6 col-sm-6 ">
                        <input type="file"  name="banner"   class="form-control ">
                        <img src="<?=$data['about_banner']?>" alt="" width="100">
                          <?php
                          if(isset($error['fileError'])){
                            printf("<p class='text-danger'> %s</p>",$error['fileError']);
                          }
                          ?>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" >About_Title </label>
                        <div class="col-md-6 col-sm-6 ">
                        <input type="text" name="title" value="<?=$data['about_title']?>" rows="5" class="form-control"></input>
                         <?php
                          if(isset($error['titleError'])){
                            printf("<p class='text-danger'> %s</p>",$error['titleError']);
                          }
                          ?>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" >About_Description </label>
                        <div class="col-md-6 col-sm-6 ">
                        <textarea  name="about_des"  rows="5" class="form-control summernote"><?=$data['about_description']?></textarea>
                          <?php
                          if(isset($error['desError'])){
                            printf("<p class='text-danger'> %s</p>",$error['desError']);
                          }
                          ?>
                         
                        </div>
                      </div>

                     
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" >Testimonial_Heading</label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text"  name="tst_heading" value="<?=$data['testimonial_heading']?>" class="form-control ">
                          <?php
                          if(isset($error['tstError'])){
                            printf("<p class='text-danger'> %s</p>",$error['tstError']);
                          }
                          ?>
                          
                        </div>
                      </div>
                      

                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" >Testimonial_Description</label>
                        <div class="col-md-6 col-sm-6 ">
                        <textarea  name="tst_description" rows="5" class="form-control"> <?=$data['testimonial_description']?></textarea>
                         <?php
                          if(isset($error['tstdError'])){
                            printf("<p class='text-danger'> %s</p>",$error['tstdError']);
                          }
                          ?>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" >Pricing_Heading</label>
                        <div class="col-md-6 col-sm-6 ">
                        <input type="text" name="price_heading" value="<?=$data['pricing_heading']?>" rows="5" class="form-control">
                       
                          <?php
                          if(isset($error['priceError'])){
                            printf("<p class='text-danger'> %s</p>",$error['priceError']);
                          }
                          ?>
                         
                           </div>
                        </div>

                       <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" >Pricing_Description</label>
                        <div class="col-md-6 col-sm-6 ">
                        <textarea  name="price_description"   class="form-control "><?=$data['pricing_description']?></textarea>
                          <?php
                          if(isset($error['pricedError'])){
                            printf("<p class='text-danger'> %s</p>",$error['pricedError']);
                          }
                          ?>
                         </div>
                      </div>

                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" >Contact_Address</label>
                        <div class="col-md-6 col-sm-6 ">
                        <input type="text"  name="contact_address" value="<?=$data['contact_address']?>"  class="form-control ">
                          <?php
                          if(isset($error['contError'])){
                            printf("<p class='text-danger'> %s</p>",$error['contError']);
                          }
                          ?>
                         </div>
                      </div>

                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" >Contact_Email_1</label>
                        <div class="col-md-6 col-sm-6 ">
                        <input type="text"  name="email" value="<?=$data['email']?>"  class="form-control ">
                          <?php
                          if(isset($error['emailError'])){
                            printf("<p class='text-danger'> %s</p>",$error['emailError']);
                          }
                          ?>
                         </div>
                      </div>

                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" >Contact_Email_2</label>
                        <div class="col-md-6 col-sm-6 ">
                        <input type="text"  name="email2" value="<?=$data['email2']?>"  class="form-control ">
                          <?php
                          if(isset($error['email2Error'])){
                            printf("<p class='text-danger'> %s</p>",$error['email2Error']);
                          }
                          ?>
                         </div>
                      </div>

                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" >Contact_Phone_1</label>
                        <div class="col-md-6 col-sm-6 ">
                        <input type="text"  name="phone" value="<?=$data['phone']?>"  class="form-control ">
                          <?php
                          if(isset($error['phnError'])){
                            printf("<p class='text-danger'> %s</p>",$error['phnError']);
                          }
                          ?>
                         </div>
                      </div>

                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" >Contact_Phone_1</label>
                        <div class="col-md-6 col-sm-6 ">
                        <input type="text"  name="phone2" value="<?=$data['phone2']?>"  class="form-control ">
                          <?php
                          if(isset($error['phn2Error'])){
                            printf("<p class='text-danger'> %s</p>",$error['phn2Error']);
                          }
                          ?>
                         </div>
                      </div>

                        

                      
                      

                      <div class="ln_solid"></div>
                      <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                          
                          <button type="submit" name="submit" class="btn btn-success">Update</button>
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