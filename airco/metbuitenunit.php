<?php
$prefix = '../';
include '../bin/init.php';

$title = t('titleAirco');
?>
<!DOCTYPE html>
<html lang="en">
<?php include("../includes/head.php"); ?> 

<body>
	<?php include("../includes/topbar.php"); ?> 
	<?php include("../includes/navbar.php"); ?> 	

    <!-- Page Header Start -->
    <div class="container-fluid page-header-2 py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-4"><?php echo t('menuAircoBuitenUnit') ?></h1>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Detail Start -->
    <div class="container-xxl py-5">
        <div class="container">
			<!-- Vaillant -->
            <div class="row g-5 mb-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="col d-flex align-items-center justify-content-center">
                        <img class="mx-auto d-block w-75" src="../img/airco-vaillant-climaVAIR-multi1.jpg" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="display-6 mb-3">climaVAIR multi</h1>
                    <p><?php echo t('climaVAIRMultiDetail') ?></p>
					<?php echo t('climaVAIRMultiDetailInfo') ?>
                    <div class="mt-4 col d-flex">
                        <img class="" src="../img/logo-vaillant.png" alt="" style="max-width: 200px;">
                    </div>
                </div>
            </div>
            <div class="row g-5 mb-5">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
					<?php echo t('climaVAIRMultiOmschrijving') ?>
                </div>
            </div>	
			
            <div class="row g-5 mb-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="col d-flex align-items-center justify-content-center">
                        <img class="mx-auto d-block w-75" src="../img/airco-vaillant-climaVAIR-pro1.jpg" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="display-6 mb-3">climaVAIR pro</h1>
                    <p><?php echo t('climaVAIRProDetail') ?></p>
					<?php echo t('climaVAIRProDetailInfo') ?>
                    <div class="mt-4 col d-flex">
                        <img class="" src="../img/logo-vaillant.png" alt="" style="max-width: 200px;">
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
					<?php echo t('climaVAIRProOmschrijving') ?>
                </div>
            </div>			
            <div class="col-lg-12 wow fadeInUp mb-5" data-wow-delay="0.5s">
				<div class=""><small><?php echo t('copyrightVaillant') ?></small></div>
			</div>
			
			<!-- Bosch -->
            <div class="row g-5 mb-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="col d-flex align-items-center justify-content-center">
                        <img class="mx-auto d-block w-75" src="../img/airco-bosch-climate3000i-a.png" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="display-6 mb-3">Climate 3000i</h1>
                    <p><?php echo t('boschClimate3000Detail') ?></p>
					<?php echo t('boschClimate3000DetailInfo') ?>
                    <div class="mt-4 col d-flex">
                        <img class="" src="../img/logo-bosch.png" alt="" style="max-width: 200px;">
                    </div>
                </div>
            </div>
            <div class="row g-5 mb-5">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
					<?php echo t('boschClimate3000Omschrijving') ?>
                </div>
            </div>

            <div class="row g-5 mb-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="col d-flex align-items-center justify-content-center">
                        <img class="mx-auto d-block w-75" src="../img/airco-bosch-climate6000i-b.png" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="display-6 mb-3">Climate 6000i</h1>
                    <p><?php echo t('boschClimate6000Detail') ?></p>
					<?php echo t('boschClimate6000DetailInfo') ?>
                    <div class="mt-4 col d-flex">
                        <img class="" src="../img/logo-bosch.png" alt="" style="max-width: 200px;">
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
					<?php echo t('boschClimate6000Omschrijving') ?>
                </div>
            </div>			
            <div class="col-lg-12 wow fadeInUp mb-5" data-wow-delay="0.5s">
				<div class=""><small><?php echo t('copyrightBosch') ?></small></div>
			</div>			
		</div>
    </div>
    <!-- Detail End -->

	<?php include("../includes/footer.php"); ?> 
	
	<?php include("../includes/scripts.php"); ?> 
</body>

</html>