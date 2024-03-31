<?php

    include_once '../view/layouts/header.view.php';
?>          
            
              <div class="row">
                <div class="col-md-12 col-sm-12 ">
                <?php
                if(isset( $_SESSION['success'])){
                  printf("<div class='alert alert-success'>%s</div>", $_SESSION['success']);
                }
                unset( $_SESSION['success']);
                
                ?>
                 <?php
                if(isset( $_SESSION['successMessage'])){
                  printf("<div class='alert alert-success'>%s</div>", $_SESSION['successMessage']);
                }
                unset( $_SESSION['successMessage']);
                
                ?>
                 <?php
                if(isset( $_SESSION['searchMessage'])){
                  printf("<div class='alert alert-success'>%s</div>", $_SESSION['searchMessage']);
                }
                unset( $_SESSION['searchMessage']);
                
                ?>
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>All Features </h2>
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

                    <form action="" method="POST">
                    <div class="input-group mb-3">
                     <input type="text" name="search"  class="form-control" placeholder="Search Data" >
                       <button type="submit" class="btn btn-primary">Search</button>
                    </div>
                    </form>

             <table class="table">
                   
              <tr>
                  <th>Id</th>
                  <th>title</th>
                  <th>Description</th>
                  <th>Banner</th>
                  <th>Status</th>
                  <th>Action</th>
              </tr>
           
             
               <?php foreach($datas as $data): ?>
                  <tr>
                      <td><?=$data['id']?></td>
                      <td><?=$data['title']?></td>
                      <td><?=$data['description']?></td>
                      <td><?=$data['banner']?></td>
                      <td> <span class="badge bg-<?= $data['status'] == 1 ? "success": "warning" ?>"> <?= $data['status'] == 1 ? "Active": "Deactive" ?></span></td>
                      
                      <td>
                          <a href="<?=adminUrl()?>/feature/single_feature.php?id=<?=$data['id']?>" class="btn btn-sm btn-secondary">View</a>
                          <a href="<?=adminUrl()?>/feature/edit_feature.php?id=<?=$data['id']?>" class="btn btn-sm btn-primary">Edit</a>
                          <a href="<?=adminUrl()?>/feature/del_feature.php?id=<?=$data['id']?>" class="btn btn-sm btn-danger">Delete</a>
                          <a href="<?=adminUrl()?>/feature/status.php?id=<?=$data['id']?>" class="btn btn-sm btn-<?=$data['status'] == 1 ? "warning": "success" ?>">
                                <?=$data['status'] == 1 ? "Deactive" : "Active"?>
                          
                      </td>
                  </tr>
                 
                  <?php endforeach ?>
                    </table>

                    
                
                  
                    
                             


                  
              
       
                   

                  </div>
                
              


                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
           
 <?php
    include_once '../view/layouts/footer.view.php';
    unset($_SESSION['error']);
?> 