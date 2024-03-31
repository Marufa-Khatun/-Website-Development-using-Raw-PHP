<?php
include_once 'view/layouts/header.view.php';
include_once 'view/component/banner.view.php';
?>

  

  <main id="main">

<?php
include_once 'view/component/service.view.php';
include_once 'view/component/why.view.php';


$selectfeature="SELECT * FROM features WHERE status=1 ";
$selectResult = mysqli_query($conn, $selectfeature);
if(mysqli_num_rows($selectResult)>0){
  $features=mysqli_fetch_all($selectResult,true);
}

$skillQuery = "SELECT * FROM skill_element WHERE status = 1 LIMIT 1";
$skillResult = mysqli_query($conn,$skillQuery);
if(mysqli_num_rows($skillResult) > 0){
  $skill=mysqli_fetch_assoc($skillResult);
} 
 

?>

 

    <!-- ======= Features Section ======= -->
    <section class="features">
      <div class="container">

        <div class="section-title">
          <h2><?=$skill['feature_heading']?></h2>
          <p><?=$skill['feature_description']?></p>
        </div>
        <?php
          foreach($features as $key=> $feature):
            if($key % 2 == 0){
        ?>
        <div class="row" data-aos="fade-up">
          <div class="col-md-5">
            <img src="uploads/features/<?=$feature['banner']?>" class="img-fluid" alt="feature">
          </div>
          <div class="col-md-7 pt-4">
            <h3><?=$feature['title']?></h3>
            <?=htmlspecialchars_decode($feature['description'])?>
          </div>
        </div>
        <?php
          }else{
        ?>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5 order-1 order-md-2">
          <img src="uploads/features/<?=$feature['banner']?>" class="img-fluid" alt="feature">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1">
          <h3><?=$feature['title']?></h3>
            <?=htmlspecialchars_decode($feature['description'])?>
          </div>
        </div>
        <?php
          }
            endforeach;
            ?>
      </div>
    </section><!-- End Features Section -->

  </main><!-- End #main -->

  <?php
  include_once 'view/layouts/footer.view.php';
  ?>