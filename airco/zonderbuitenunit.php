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
            <h1 class="display-4 text-white animated slideInDown mb-4"><?php echo t('menuAircoZonderBuitenUnit') ?></h1>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Detail Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 mb-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="col d-flex align-items-center justify-content-center">
                        <img class="mx-auto d-block w-75" src="../img/airco-climacon-monobloc1.png" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="display-6 mb-3">Climacon MonoBloc CB-35</h1>
                    <p><?php echo t('monoblocDetail') ?></p>
					<?php echo t('monoblocDetailInfo') ?>
                    <div class="mt-4 col d-flex">
                        <img class="" src="../img/logo-midea.png" alt="" style="max-width: 200px;">
                    </div>
                </div>
            </div>
            <div class="row g-5 mb-5">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
					<?php echo t('monoblocOmschrijving') ?>
                </div>
            </div>	
            <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.5s">
				<div class=""><small><?php echo t('copyrightMidea') ?></small></div>
			</div>			
		</div>
    </div>
    <!-- Detail End -->

	<?php include("../includes/footer.php"); ?> 
	
	<?php include("../includes/scripts.php"); ?> 
</body>

</html>