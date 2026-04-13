<?php
$prefix = '';
include 'bin/init.php';

$title = t('titlePremies');
?>
<!DOCTYPE html>
<html lang="en">
<?php include("includes/head.php"); ?> 

<body>
	<?php include("includes/topbar.php"); ?> 
	<?php include("includes/navbar.php"); ?> 	

    <!-- Page Header Start -->
    <div class="container-fluid page-header-2 py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-4"><?php echo t('menuPremies') ?></h1>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Detail Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="display-6 mb-3"><?php echo t('premieTitel') ?></h1>
					<p><?php echo t('premieDetail') ?></p>
					<p><?php echo t('premieWebsite') ?></p>
					<p class="mb-5"><?php echo t('RESCertNummer') ?></p>
					<p class="text-center"><a href="http://mijnverbouwpremie.be/" target="_blank" class="btn btn-primary py-3 px-5 animated slideInDown"><?php echo t('buttonMijnVerbouwPremie') ?></a></p>
                </div>
            </div>					
        </div>
    </div>
    <!-- Detail End -->

	<?php include("includes/footer.php"); ?> 
	
	<?php include("includes/scripts.php"); ?> 
</body>

</html>