<?php
    include_once '../view/layouts/header.view.php';
?>          
           
                
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Update Why Us</h2>
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
                        <label class="col-form-label col-md-3 col-sm-3 label-align" >Icon One</label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text"  name="icon_one" value="<?=$data['icon_one']?>" class="form-control ">
                          <?php
                          if(isset($error['iconError'])){
                            printf("<p class='text-danger'> %s</p>",$error['iconError']);
                          }
                          ?>
                           <p>Note:Select icon with <a href="https://boxicons.com/">boxicons.com</a></p>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" >Title One</label>
                        <div class="col-md-6 col-sm-6 ">
                        <input type="text" name="title_one" value="<?=$data['title_one']?>" rows="5" class="form-control"></input>
                         <?php
                          if(isset($error['title1Error'])){
                            printf("<p class='text-danger'> %s</p>",$error['title1Error']);
                          }
                          ?>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" >Description One</label>
                        <div class="col-md-6 col-sm-6 ">
                        <textarea  name="description_one"  rows="5" class="form-control"><?=$data['description_one']?></textarea>
                          <?php
                          if(isset($error['des1Error'])){
                            printf("<p class='text-danger'> %s</p>",$error['des1Error']);
                          }
                          ?>
                         
                        </div>
                      </div>

                     
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" >Icon Two</label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text"  name="icon_two" value="<?=$data['icon_two']?>" class="form-control ">
                          <?php
                          if(isset($error['icon2Error'])){
                            printf("<p class='text-danger'> %s</p>",$error['icon2Error']);
                          }
                          ?>
                           <p>Note:Select icon with <a href="https://boxicons.com/">boxicons.com</a></p>
                        </div>
                      </div>
                      

                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" >Title Two</label>
                        <div class="col-md-6 col-sm-6 ">
                        <input type="text" name="title_two" value="<?=$data['title_two']?>" rows="5" class="form-control"></input>
                         <?php
                          if(isset($error['title2Error'])){
                            printf("<p class='text-danger'> %s</p>",$error['title2Error']);
                          }
                          ?>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" >Description Two</label>
                        <div class="col-md-6 col-sm-6 ">
                        <textarea  name="description_two"  rows="5" class="form-control"><?=$data['description_two']?></textarea>
                       
                          <?php
                          if(isset($error['des2Error'])){
                            printf("<p class='text-danger'> %s</p>",$error['des2Error']);
                          }
                          ?>
                         
                           </div>
                        </div>

                          <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" >Vedio Link</label>
                        <div class="col-md-6 col-sm-6 ">
                        <input type="text"  name="vedio_link" value="<?=$data['vedio_link']?>"  class="form-control ">
                          <?php
                          if(isset($error['linkError'])){
                            printf("<p class='text-danger'> %s</p>",$error['linkError']);
                          }
                          ?>
                             </div>
                      </div>

                        

                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" >Banner</label>
                        <div class="col-md-6 col-sm-6 ">
                        <input type="file"  name="banner"   class="form-control ">
                        <img src="<?=$data['banner']?>" alt="" width="100">
                          <?php
                          if(isset($error['fileError'])){
                            printf("<p class='text-danger'> %s</p>",$error['fileError']);
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