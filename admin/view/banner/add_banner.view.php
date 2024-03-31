<?php
    include_once '../view/layouts/header.view.php';
?>          
            
              <div class="row">
                <div class="col-md-12 col-sm-12 ">
                
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Add Banners </h2>
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
                      <form action="<?=adminUrl()?>/banner/add_banner.php" method="POST"class="form-horizontal form-label-left __web-inspector-hide-shortcut__" >

                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" >Title</label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text"  name="title"  class="form-control ">
                          <?php
                          if(isset($_SESSION['error']['titleError'])){
                            printf("<p class='text-danger'> %s</p>",$_SESSION['error']['titleError']);
                          }
                          ?>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" >Description</label>
                        <div class="col-md-6 col-sm-6 ">
                         <textarea  name="description"  rows="5" class="form-control"></textarea>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Button Text</label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text"  name="btn_txt" class="form-control ">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Button Link</label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text"  name="btn_url" class="form-control ">
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