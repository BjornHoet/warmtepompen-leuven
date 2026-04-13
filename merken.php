<?php
$prefix = '';
include 'bin/init.php';

$title = t('titleMerken');
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
            <h1 class="display-4 text-white animated slideInDown mb-4"><?php echo t('menuMerken') ?></h1>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Detail Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="display-6 mb-5">Vaillant</h1>
                    <p class="mb-5"><?php echo t('merkVaillantIntro') ?></p>
                    <div class="d-flex mb-5">
                        <div class="flex-shrink-0 btn-square bg-primary rounded-circle" style="width: 90px; height: 90px;">
                            <img class="img-fluid" src="img/icon/icon-thumb.png" alt="">
                        </div>
                        <div class="ms-4">
                            <h5 class="mb-3"><?php echo t('merkVaillantKwaliteit') ?></h5>
                            <span><?php echo t('merkVaillantKwaliteitDetail') ?></span>
                        </div>
                    </div>
                    <div class="d-flex mb-5">
                        <div class="flex-shrink-0 btn-square bg-primary rounded-circle" style="width: 90px; height: 90px;">
                            <img class="img-fluid" src="img/icon/icon-home.png" alt="">
                        </div>
                        <div class="ms-4">
                            <h5 class="mb-3"><?php echo t('merkVaillantSysteem') ?></h5>
                            <span><?php echo t('merkVaillantSysteemDetail') ?></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="col d-flex align-items-center justify-content-center" style="min-height: 400px;">
                        <img class="mx-auto d-block w-75" src="img/logo-vaillant.png" alt="" style="object-fit: cover;">
                    </div>
                </div>
            </div>

            <div class="row g-5 mt-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="display-6 mb-5">Midea</h1>
                    <p class="mb-5"><?php echo t('merkMideaIntro') ?></p>
                    <div class="d-flex mb-5">
                        <div class="flex-shrink-0 btn-square bg-primary rounded-circle" style="width: 90px; height: 90px;">
                            <img class="img-fluid" src="img/icon/icon-assortiment.svg" alt="">
                        </div>
                        <div class="ms-4">
                            <h5 class="mb-3"><?php echo t('merkMideaAssortiment') ?></h5>
                            <span><?php echo t('merkMideaAssortimentDetail') ?></span>
                        </div>
                    </div>
                    <div class="d-flex mb-5">
                        <div class="flex-shrink-0 btn-square bg-primary rounded-circle" style="width: 90px; height: 90px;">
                            <img class="img-fluid" src="img/icon/icon-verbruik.svg" alt="">
                        </div>
                        <div class="ms-4">
                            <h5 class="mb-3"><?php echo t('merkMideaLaagVerbruik') ?></h5>
                            <span><?php echo t('merkMideaLaagVerbruikDetail') ?></span>
                        </div>
                    </div>
                    <div class="d-flex mb-5">
                        <div class="flex-shrink-0 btn-square bg-primary rounded-circle" style="width: 90px; height: 90px;">
                            <img class="img-fluid" src="img/icon/icon-smart.svg" alt="">
                        </div>
                        <div class="ms-4">
                            <h5 class="mb-3"><?php echo t('merkMideaSmartHome') ?></h5>
                            <span><?php echo t('merkMideaSmartHomeDetail') ?></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="col d-flex align-items-center justify-content-center" style="min-height: 400px;">
                        <img class="mx-auto d-block w-75" src="img/logo-midea.png" alt="" style="object-fit: cover;">
                    </div>
                </div>
				<div class="col-lg-12 wow fadeInUp" data-wow-delay="0.5s">
					<div class=""><small><?php echo t('copyrightVaillantMidea') ?></small></div>
				</div>								
            </div>
        </div>
    </div>
    <!-- Detail End -->

	<?php include("includes/footer.php"); ?> 
	
	<?php include("includes/scripts.php"); ?> 
</body>

</html>