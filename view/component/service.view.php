  <?php
  $serviceQuery="SELECT * FROM services WHERE status = 1 LIMIT 4 ";
  $serviceResulrt=mysqli_query($conn,  $serviceQuery);
  if(mysqli_num_rows($serviceResulrt)>0){
    $services=mysqli_fetch_all($serviceResulrt,true);
  }
  ?>
    <section class="services">
      <div class="container">
        <div class="row">

           <?php
            foreach($services as $data):
            ?>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
            <div class="icon-box <?=$data['box_color']?>">
              <div class="icon"><i class="bx bxl-<?=$data['icon']?>"></i></div>
              <h4 class="title"><a href=""><?=$data['title']?></a></h4>
              <p class="description"><?=$data['description']?></p>
            </div>
          </div>
          <?php
             endforeach;
            ?>
        </div>
      </div>
    </section>