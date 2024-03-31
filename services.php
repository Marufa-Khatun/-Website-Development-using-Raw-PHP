<?php
include_once 'view/layouts/header.view.php';
$setting_optionsQuery = "SELECT * FROM setting_options ";
$setting_optionsResult = mysqli_query($conn,$setting_optionsQuery);
if(mysqli_num_rows($setting_optionsResult) > 0){
  $setting_options=mysqli_fetch_assoc($setting_optionsResult);
} 


$serviceQuery = "SELECT * FROM service_details WHERE status=1 LIMIT 4 ";
$serviceResult = mysqli_query($conn,$serviceQuery);
if(mysqli_num_rows($serviceResult) > 0){
  $service=mysqli_fetch_all($serviceResult,true);
} 
?>

  <main id="main">

    <!-- ======= Our Services Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Our Services</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Our Services</li>
          </ol>
        </div>

      </div>
    </section><!-- End Our Services Section -->

  <?php
  include_once 'view/component/service.view.php';
  include_once 'view/component/why.view.php';
  ?>

    <!-- ======= Service Details Section ======= -->
    <section class="service-details">
      <div class="container">
      
        <div class="row">
        <?php
            foreach($service as $serv):
            ?>
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
         
            <div class="card">
              <div class="card-img">
                <img src="uploads/service_details/<?=$serv['banner']?>" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="#"><?=$serv['title']?></a></h5>
                <p class="card-text"><?=$serv['description']?></p>
                <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
              </div>
            </div>

            


          </div>
          <?php
             endforeach;
            ?>
      </div>
      
    </section><!-- End Service Details Section -->

    <!-- ======= Pricing Section ======= -->
    <section class="pricing section-bg" data-aos="fade-up">
      <div class="container">

        <div class="section-title">
          <h2><?=$setting_options['pricing_heading']?></h2>
          <p><?=$setting_options['pricing_description']?></p>
        </div>

        <div class="row no-gutters">

          <div class="col-lg-4 box">
            <h3>Free</h3>
            <h4>$0<span>per month</span></h4>
            <ul>
              <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
              <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
              <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
              <li class="na"><i class="bx bx-x"></i> <span>Pharetra massa massa ultricies</span></li>
              <li class="na"><i class="bx bx-x"></i> <span>Massa ultricies mi quis hendrerit</span></li>
            </ul>
            <a href="#" class="get-started-btn">Get Started</a>
          </div>

          <div class="col-lg-4 box featured">
            <h3>Business</h3>
            <h4>$29<span>per month</span></h4>
            <ul>
              <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
              <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
              <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
              <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
              <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
            </ul>
            <a href="#" class="get-started-btn">Get Started</a>
          </div>

          <div class="col-lg-4 box">
            <h3>Developer</h3>
            <h4>$49<span>per month</span></h4>
            <ul>
              <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
              <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
              <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
              <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
              <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
            </ul>
            <a href="#" class="get-started-btn">Get Started</a>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->

  </main><!-- End #main -->

  <?php
  include_once 'view/layouts/footer.view.php';
  ?>