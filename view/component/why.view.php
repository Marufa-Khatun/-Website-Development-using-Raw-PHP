<?php
$whyusQuery = "SELECT * FROM whyus WHERE status = 1 LIMIT 1";
$whyusResult = mysqli_query($conn,$whyusQuery);
if(mysqli_num_rows($whyusResult) > 0){
  $whyus=mysqli_fetch_assoc($whyusResult);
} 
   
   ?>
   
   
   <!-- ======= Why Us Section ======= -->
   <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 video-box">
            <img src="uploads/whyus/<?=$whyus['banner']?>" class="img-fluid" alt="whyus">
            <a href="<?=$whyus['vedio_link']?>" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

            <div class="icon-box">
              <div class="icon"><i class="bx <?=$whyus['icon_one']?>"></i></div>
              <h4 class="title"><a href=""><?=$whyus['title_one']?></a></h4>
              <p class="description"><?=$whyus['description_one']?></p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-<?=$whyus['icon_one']?>"></i></div>
              <h4 class="title"><a href=""><?=$whyus['title_two']?></a></h4>
              <p class="description"><?=$whyus['description_two']?></p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->