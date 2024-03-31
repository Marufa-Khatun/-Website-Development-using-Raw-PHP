<?php
include_once 'view/layouts/header.view.php';


function selectSingleData($conn, $table){

$skillQuery = "SELECT * FROM $table ";
$skillResult = mysqli_query($conn,$skillQuery);
if(mysqli_num_rows($skillResult) > 0){
  $data=mysqli_fetch_assoc($skillResult);
} 
return $data;
}
$skill = selectSingleData($conn, 'skill_element');
$setting_options = selectSingleData($conn, 'setting_options');



$testimonialQuery = "SELECT * FROM testimonial WHERE status = 1   LIMIT 5 ";
$testimonialResult = mysqli_query($conn,$testimonialQuery);
if(mysqli_num_rows($testimonialResult) > 0){
  $testimonial=mysqli_fetch_all($testimonialResult,true);
}
?>
  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>About Us</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>About Us</li>
          </ol>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= About Section ======= -->
    <section class="about" data-aos="fade-up">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <img src="uploads/setting_options/<?=$setting_options['about_banner']?>" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <h3><?=$setting_options['about_title']?></h3>
            <p class="fst-italic">
            <?=$setting_options['about_description']?>
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Facts Section ======= -->
    <section class="facts section-bg" data-aos="fade-up">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
            <p>Clients</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
            <p>Projects</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
            <p>Hours Of Support</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
            <p>Hard Workers</p>
          </div>

        </div>

      </div>
    </section><!-- End Facts Section -->

    <!-- ======= Our Skills Section ======= -->
    <section class="skills" data-aos="fade-up">
      <div class="container">

        <div class="section-title">
          <h2><?=$skill['skill_heading']?></h2>
          <p><?=$skill['skill_description']?></p>
        </div>

        <div class="skills-content">

          <div class="progress">
            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
              <span class="skill"><?=$skill['skill_1']?> <i class="val"><?=$skill['skill_%_1']?></i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
              <span class="skill"><?=$skill['skill_2']?> <i class="val"><?=$skill['skill_%_2']?></i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
              <span class="skill"><?=$skill['skill_3']?> <i class="val"><?=$skill['skill_%_3']?></i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">
              <span class="skill"><?=$skill['skill_4']?> <i class="val"><?=$skill['skill_%_4']?></i></span>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Our Skills Section -->

    <!-- ======= Tetstimonials Section ======= -->
    <section class="testimonials" data-aos="fade-up">
      <div class="container">

        <div class="section-title">
          <h2><?=$setting_options['testimonial_heading']?></h2>
          <p><?=$setting_options['testimonial_description']?></p>
        </div>
        
        
        <div class="testimonials-carousel swiper">
          <div class="swiper-wrapper">

          <?php
           foreach($testimonial as  $test):
            
          ?>


            <div class="testimonial-item swiper-slide  ">
              <img src="uploads/testimonial/<?=$test['profile']?>" class="testimonial-img" alt="">
              <h3> <?=$test['name']?></h3>
              <h4><?=$test['designation']?> </h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                <?=$test['description']?>
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
             
            <?php
          endforeach;
            ?>
            


          </div>
          <div class="swiper-pagination"></div>
        </div>
       
      </div>
    </section><!-- End Ttstimonials Section -->

  </main><!-- End #main -->

  <?php
  include_once 'view/layouts/footer.view.php';
  ?>