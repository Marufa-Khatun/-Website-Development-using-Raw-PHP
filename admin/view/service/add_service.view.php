<?php
    include_once '../view/layouts/header.view.php';
?>          
            
              <div class="row">
                <div class="col-md-12 col-sm-12 ">
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
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Add Service</h2>
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
                      <form action="<?=adminUrl()?>/service/add_service.php" method="POST"   class="form-horizontal form-label-left __web-inspector-hide-shortcut__" >

                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" >Title</label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text"  name="title"  class="form-control ">
                          <?php
                          if(isset($error['titleError'])){
                            printf("<p class='text-danger'> %s</p>",$error['titleError']);
                          }
                          ?>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" >Description</label>
                        <div class="col-md-6 col-sm-6 ">
                         <textarea  name="description"  rows="5" class="form-control">
                         
                         </textarea>
                         <?php
                          if(isset($error['desError'])){
                            printf("<p class='text-danger'> %s</p>",$error['desError']);
                          }
                          ?>
                        </div>
                      </div>

                      
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Box Color</label>
                        <div class="col-md-6 col-sm-6 ">
                         <select name="box_color" class="form-control">
                         
                            <option disabled selected>Select box color</option>
                            <option value="icon-box-pink">Pink</option>
                            <option value="icon-box-cyan">Cyan</option>
                            <option value="icon-box-green">Green</option>
                            <option value="icon-box-blue">Blue</option>
                         </select>
                         <?php
                          if(isset($error['colorError'])){
                            printf("<p class='text-danger'> %s</p>",$error['colorError']);
                          }
                          ?>
                        
                        </div>
                      </div>


                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Icon Name</label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text"  name="icon" placeholder="ex:bxl-dribbble" class="form-control ">
                          <?php
                          if(isset($error['iconError'])){
                            printf("<p class='text-danger'> %s</p>",$error['iconError']);
                          }
                          ?>
                          <p>Note:Select icon with <a href="https://boxicons.com/">boxicons.com</a>

                          </p>
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