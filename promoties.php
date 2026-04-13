<?php
$prefix = '';
include 'bin/init.php';

$title = t('titlePromoties');
?>
<!DOCTYPE html>
<html lang="en">
<?php include("includes/head.php"); ?> 

<body>
	<?php include("includes/topbar.php"); ?> 
	<?php include("includes/navbar.php"); ?> 	

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-4"><?php echo t('menuPromoties') ?></h1>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Detail Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="display-6 mb-3"><?php echo t('promotiesTitel') ?></h1>
					<img class="img-fluid w-100 wow zoomIn mt-3" data-wow-delay="0.3s" src="img/promo-vaillaint-aroSTORPlus.jpg" style="max-width: 800px;">
                </div>
            </div>					
        </div>
    </div>
    <!-- Detail End -->

	<?php include("includes/footer.php"); ?> 
	
	<?php include("includes/scripts.php"); ?> 
</body>

</html>