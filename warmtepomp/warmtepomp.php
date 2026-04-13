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
            <h1 class="display-4 text-white animated slideInDown mb-4"><?php echo t('menuWarmtepompenWarmtepompen') ?></h1>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Detail Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4 mb-5">
                <h1 class="display-6 mb-3">Vaillant</h1>
                <div class="col-lg-4 col-md-6 position-relative">
					<span class="badge-new wow fadeInUp" data-wow-delay="0.1s"><?php echo t('badgeNieuw') ?></span>
                    <div class="wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid" src="../img/warmtepomp-vaillaint-aroSTORplus.jpg" alt="">
                        </div>
                        <div class="bg-light text-center p-2">
                            <h5>aroSTOR plus</h5>
						</div>
						<div class="bg-light p-3">
                            <p class="text-black fw-bold"><?php echo t('warmtepomparoSTORplus') ?></p>
							<?php echo t('warmtepomparoSTORplusDetail') ?>
                        </div>
                    </div>
                </div>
				<div class="col-lg-8 col-md-6 position-relative">
					<iframe width="100%" height="100%" src="https://www.youtube.com/embed/BaZTsESiMq4?si=JrnwBqAXvfNyBnZx" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
				</div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid" src="../img/warmtepomp-vaillaint-aroTHERMplus.jpg" alt="">
                        </div>
                        <div class="bg-light text-center p-2">
                            <h5>aroTHERM plus</h5>
						</div>
						<div class="bg-light p-3">
                            <p class="text-black fw-bold"><?php echo t('warmtepomparoTHERMplus') ?></p>
							<?php echo t('warmtepomparoTHERMplusDetail') ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid" src="../img/warmtepomp-vaillaint-aroTHERMsplit.jpg" alt="">
                        </div>
                        <div class="bg-light text-center p-2">
                            <h5>aroTHERM split</h5>
						</div>
						<div class="bg-light p-3">
                            <p class="text-black fw-bold"><?php echo t('warmtepomparoTHERMsplit') ?></p>
							<?php echo t('warmtepomparoTHERMsplitDetail') ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid" src="../img/warmtepomp-vaillaint-aroTHERMsplitplus.jpg" alt="">
                        </div>
                        <div class="bg-light text-center p-2">
                            <h5>aroTHERM split plus</h5>
						</div>
						<div class="bg-light p-3">
                            <p class="text-black fw-bold"><?php echo t('warmtepomparoTHERMsplitplus') ?></p>
							<?php echo t('warmtepomparoTHERMsplitplusDetail') ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid" src="../img/warmtepomp-vaillaint-flexoCOMPACTexclusive.jpg" alt="">
                        </div>
                        <div class="bg-light text-center p-2">
                            <h5>flexoCOMPACT exclusive</h5>
						</div>
						<div class="bg-light p-3">
                            <p class="text-black fw-bold"><?php echo t('warmtepompflexoCOMPACTexclusive') ?></p>
							<?php echo t('warmtepompflexoCOMPACTexclusiveDetail') ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid" src="../img/warmtepomp-vaillaint-flexoTHERMexclusive.jpg" alt="">
                        </div>
                        <div class="bg-light text-center p-2">
                            <h5>flexoTHERM exclusive</h5>
						</div>
						<div class="bg-light p-3">
                            <p class="text-black fw-bold"><?php echo t('warmtepompflexoTHERMexclusive') ?></p>
							<?php echo t('warmtepompflexoTHERMexclusiveDetail') ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid" src="../img/warmtepomp-vaillaint-geoTHERMperform.jpg" alt="">
                        </div>
                        <div class="bg-light text-center p-2">
                            <h5>geoTHERM perform</h5>
						</div>
						<div class="bg-light p-3">
                            <p class="text-black fw-bold"><?php echo t('warmtepompgeoTHERMperform') ?></p>
							<?php echo t('warmtepompgeoTHERMperformDetail') ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid" src="../img/warmtepomp-vaillaint-uniTOWER.jpg" alt="">
                        </div>
                        <div class="bg-light text-center p-2">
                            <h5>uniTOWER</h5>
						</div>
						<div class="bg-light p-3">
                            <p class="text-black fw-bold"><?php echo t('warmtepompuniTOWER') ?></p>
							<?php echo t('warmtepompuniTOWERDetail') ?>
                        </div>
                    </div>
                </div>
			</div>

            <div class="row g-4">
                <h1 class="display-6 mb-3">Midea</h1>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid" src="../img/warmtepomp-midea-arcticMonoblocHP.png" alt="">
                        </div>
                        <div class="bg-light text-center p-2">
                            <h5>Midea ARCTIC Monobloc HP</h5>
						</div>
						<div class="bg-light p-3">
                            <p class="text-black fw-bold"><?php echo t('warmtepompARCTICMonoblocHP') ?></p>
							<?php echo t('warmtepompARCTICMonoblocHPDetail') ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid" src="../img/warmtepomp-midea-arcticMonobloc.png" alt="">
                        </div>
                        <div class="bg-light text-center p-2">
                            <h5>Midea ARCTIC Monobloc</h5>
						</div>
						<div class="bg-light p-3">
                            <p class="text-black fw-bold"><?php echo t('warmtepompARCTICMonobloc') ?></p>
							<?php echo t('warmtepompARCTICMonoblocDetail') ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid" src="../img/warmtepomp-midea-arcticTower.png" alt="">
                        </div>
                        <div class="bg-light text-center p-2">
                            <h5>Midea ARCTIC Tower</h5>
						</div>
						<div class="bg-light p-3">
                            <p class="text-black fw-bold"><?php echo t('warmtepompARCTICTower') ?></p>
							<?php echo t('warmtepompARCTICTowerDetail') ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid" src="../img/warmtepomp-midea-arcticBox.png" alt="">
                        </div>
                        <div class="bg-light text-center p-2">
                            <h5>Midea ARCTIC Box</h5>
						</div>
						<div class="bg-light p-3">
                            <p class="text-black fw-bold"><?php echo t('warmtepompARCTICBox') ?></p>
							<?php echo t('warmtepompARCTICBoxDetail') ?>
                        </div>
                    </div>
                </div>
				<div class="col-lg-12 wow fadeInUp" data-wow-delay="0.5s">
					<div class=""><small><?php echo t('copyrightVaillantMidea') ?></small></div>
				</div>				
			</div>
		</div>
    </div>
    <!-- Detail End -->

	<?php include("../includes/footer.php"); ?> 
	
	<?php include("../includes/scripts.php"); ?> 
</body>

</html>