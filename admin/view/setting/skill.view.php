<?php
    include_once '../view/layouts/header.view.php';
?>          
            
              <div class="row">
                <div class="col-md-12 col-sm-12 ">
                
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Skills</h2>
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
                        <label class="col-form-label col-md-3 col-sm-3 label-align" >Feature_Heading</label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text"  name="fheading" value="<?=$data['feature_heading']?>" class="form-control ">
                          <?php
                          if(isset($_SESSION['error']['fhError'])){
                            printf("<p class='text-danger'> %s</p>",$_SESSION['error']['fhError']);
                          }
                          ?>
                        </div>
                      </div>

                      
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" >Feature_Description</label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text"  name="fdescription" value="<?=$data['feature_description']?>"  class="form-control ">
                          <?php
                          if(isset($_SESSION['error']['fdError'])){
                            printf("<p class='text-danger'> %s</p>",$_SESSION['error']['fdError']);
                          }
                          ?>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" >Skill_Heading</label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text"  name="sheading" value="<?=$data['skill_heading']?>" class="form-control ">
                          <?php
                          if(isset($_SESSION['error']['shError'])){
                            printf("<p class='text-danger'> %s</p>",$_SESSION['error']['shError']);
                          }
                          ?>
                        </div>
                      </div>

                      
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" >Skill_Description</label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text"  name="sdescription" value="<?=$data['skill_description']?>"  class="form-control ">
                          <?php
                          if(isset($_SESSION['error']['sdError'])){
                            printf("<p class='text-danger'> %s</p>",$_SESSION['error']['sdError']);
                          }
                          ?>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" >Skill One</label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text"  name="skill1" value="<?=$data['skill_1']?>"  class="form-control ">
                          
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" >Skill two</label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text"  name="skill2" value="<?=$data['skill_2']?>"  class="form-control ">
                          
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" >Skill Three</label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text"  name="skill3" value="<?=$data['skill_3']?>"  class="form-control ">
                          
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" >Skill Four</label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text"  name="skill4" value="<?=$data['skill_4']?>"  class="form-control ">
                          
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" >Skill Percentage_1</label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text"  name="skill5" value="<?=$data['skill_%_1']?>"  class="form-control ">
                          
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" >Skill Percentage_2</label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text"  name="skill6" value="<?=$data['skill_%_2']?>"  class="form-control ">
                          
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" >Skill Percentage_3</label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text"  name="skill7" value="<?=$data['skill_%_3']?>"  class="form-control ">
                          
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" >Skill Percentage_4</label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text"  name="skill8" value="<?=$data['skill_%_4']?>"  class="form-control ">
                          
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