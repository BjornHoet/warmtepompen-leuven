<?php
$prefix = '../';
include '../bin/init.php';

$title = t('titleWarmtepomp');
?>
<!DOCTYPE html>
<html lang="en">
<?php include("../includes/head.php"); ?> 

<body>
	<?php include("../includes/topbar.php"); ?> 
	<?php include("../includes/navbar.php"); ?> 	

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-4"><?php echo t('menuWarmtepompenCondensatieketel') ?></h1>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Detail Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 mb-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="col d-flex align-items-center justify-content-center">
                        <img class="mx-auto d-block w-75" src="../img/condensatieketel-vaillant-ecoTECexclusive.jpg" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p><?php echo t('hybrideOplossing') ?></p>
                    <div class="mt-4 col d-flex">
                        <img class="" src="../img/logo-vaillant.png" alt="" style="max-width: 200px;">
                    </div>
                </div>
				<div class="col-lg-12 wow fadeInUp" data-wow-delay="0.5s">
					<div class=""><small><?php echo t('copyrightVaillant') ?></small></div>
				</div>								
            </div>
		</div>
    </div>
    <!-- Detail End -->

	<?php include("../includes/footer.php"); ?> 
	
	<?php include("../includes/scripts.php"); ?> 
</body>

</html>