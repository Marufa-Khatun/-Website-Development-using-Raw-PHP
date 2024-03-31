<?php
    include_once '../view/layouts/header.view.php';
?>          
           
                
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Update Features </h2>
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
                      
                      <form action="" method="POST" enctype="multipart/form-data" class="form-horizontal form-label-left __web-inspector-hide-shortcut__" >

                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" >Title</label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text"  name="title" value="<?=$data['title']?>" class="form-control ">
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
                         <textarea  name="description"  rows="5" class="form-control summernote"><?=$data['description']?></textarea>
                         <?php
                          if(isset($_SESSION['error']['desError'])){
                            printf("<p class='text-danger'> %s</p>",$_SESSION['error']['desError']);
                          }
                          ?>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" >Banner</label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="file"  name="banner" value="<?=$data['banner']?>" class="form-control ">
                          <?php
                                if(isset($error['fileError']))
                                 {
                                     printf("<p class='text-danger'> %s </p>", $error['fileError']) ;                              
                                 }
                            ?>
                         <div class="item form-group">
                                    <?php if($data['banner']){?>
                                   <img src="../../uploads/features/<?=$data['banner']?>" alt="<?=$data['banner']?>" width="60">
                                  <?php
                                   }else{
                                    echo "--";
                                   }
                                  ?>
                        </div>
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