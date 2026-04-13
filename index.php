<?php
$prefix = '';
include 'bin/init.php';

$title = t('titleHome');
?>
<!DOCTYPE html>
<html lang="en">
<?php include("includes/head.php"); ?> 

<body>
	<?php include("includes/topbar.php"); ?> 
	<?php include("includes/navbar.php"); ?> 	

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel/warmtepomp-img1.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-12 pt-5">
                                    <h1 class="display-4 text-white mb-4 animated slideInDown text-glow"><?php echo t('warmtepompSubtext') ?></h1>
                                    <h1 class="display-4 text-warmtepomp mb-4 animated slideInDown text-glow"><?php echo t('warmtepompen') ?></h1>
                                    <!--<p class="fs-5 text-body mb-4 pb-2 mx-sm-5 animated slideInDown text-white"><?php echo t('warmtepompSubtextDetails') ?></p> -->
                                    <a href="<?php echo $prefix ?>warmtepomp/warmtepomp.php" class="btn btn-primary py-3 px-5 animated slideInDown"><?php echo t('buttonMeerInfo') ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel/airco-img2.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-12 pt-5">
                                    <h1 class="display-4 text-white mb-4 animated slideInDown text-glow"><?php echo t('aircoSubtext') ?></h1>
                                    <h1 class="display-4 text-primary mb-4 animated slideInDown text-glow-blue"><?php echo t('aircos') ?></h1>
                                    <!--<p class="fs-5 text-body mb-4 pb-2 mx-sm-5 animated slideInDown text-white"><?php echo t('aircoSubtextDetails') ?></p> -->
                                    <a href="<?php echo $prefix ?>airco/metbuitenunit.php" class="btn btn-primary py-3 px-5 animated slideInDown"><?php echo t('buttonMeerInfo') ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden"><?php echo t('vorige') ?></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden"><?php echo t('volgende') ?></span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->
	
    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h1 class="display-6 mb-5"><?php echo t('welkomAircoLeuven') ?></h1>
                        <div class="row g-4 mb-4">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 me-3" src="img/icon/icon-07-primary.png" alt="">
                                    <h5 class="mb-0"><?php echo t('ervarenTechniekers') ?></h5>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 me-3" src="img/icon/icon-09-primary.png" alt="">
                                    <h5 class="mb-0"><?php echo t('topService') ?></h5>
                                </div>
                            </div>
                        </div>
                        <p class="mb-4"><?php echo t('aircoLeuvenWelkomTekst') ?></p>
						<p class="mb-4"><?php echo t('RESCertNummer') ?></p>
                        <div class="border-top mt-4 pt-4">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="d-flex align-items-center">
                                        <div class="btn-lg-square bg-primary rounded-circle me-3">
                                            <i class="fa fa-phone-alt text-white"></i>
                                        </div>
                                        <h5 class="mb-0"><a href="tel:<?php echo t('gsmNummer') ?>"><?php echo t('gsmNummer') ?></a></h5>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="d-flex align-items-center">
                                        <div class="btn-lg-square bg-primary rounded-circle me-3 flex-shrink-0">
                                            <i class="fa fa-envelope text-white"></i>
                                        </div>
                                        <h5 class="mb-0" style="font-size: 0.9rem;"><a href="mailto:<?php echo t('mailAdres') ?>"><?php echo t('mailAdres') ?></a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-6 text-end">
                            <img class="img-fluid w-75 wow zoomIn" data-wow-delay="0.1s" src="img/airco-installer2-square.jpg" style="margin-top: 25%;">
                        </div>
                        <div class="col-6 text-start">
                            <img class="img-fluid w-100 wow zoomIn" data-wow-delay="0.3s" src="img/airco-installer1-square.jpg">
                        </div>
                        <div class="col-6 text-end">
                            <img class="img-fluid w-50 wow zoomIn" data-wow-delay="0.5s" src="img/warmtepomp-house1-square.jpg">
                        </div>
                        <div class="col-6 text-start">
                            <img class="img-fluid w-75 wow zoomIn" data-wow-delay="0.7s" src="img/airco-house1-square.png">
                        </div>
                    </div>
                </div>
			</div>
            <div class="row g-5 mt-5 bg-light">
				<div class="col-lg-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="row g-3">
						<a href="http://www.joorisbvba.be" target="_blank"><img class="img-fluid w-100 wow zoomIn mb-5 ms-5" data-wow-delay="0.3s" src="img/logo-jooris.jpg" style="max-width: 250px;" /></a>
                    </div>
                </div>
                <div class="col-lg-9 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-50 mb-5">
						<h1 class="display-6 mb-5"><?php echo t('joorisInstallatiebedrijf') ?></h1>
						<?php echo t('joorisInstallatiebedrijfTekst1') ?><a href="http://www.joorisbvba.be" target="_blank">JOORIS</a><?php echo t('joorisInstallatiebedrijfTekst2') ?>
                    </div>
                </div>			
            </div>
        </div>
    </div>
    <!-- About End -->

	<?php include("includes/footer.php"); ?> 
	
	<?php include("includes/scripts.php"); ?> 
</body>

</html>