    <!-- Footer Start -->
    <div class="container-fluid bg-dark footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-6">
                    <img class="img-fluid me-3" style="max-height: 80px" src="<?php echo $prefix ?>img/logo.png" alt="">
                </div>
                <div class="col-md-6">
                </div>
                <div class="col-lg-4 col-md-6">
                    <h5 class="text-light mb-4"><?php echo t('footerContacteerOns') ?></h5>
                    <p><i class="fa fa-map-marker-alt me-3"></i><?php echo t('adres') ?></p>
                    <p><i class="fa fa-phone-alt me-3"></i><a href="tel:<?php echo t('gsmNummer') ?>"><?php echo t('gsmNummer') ?></a></p>
                    <p><i class="fa fa-envelope me-3"></i><a href="mailto:<?php echo t('mailAdres') ?>"><?php echo t('mailAdres') ?></a></p>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h5 class="text-light mb-4"><?php echo t('footerOnzeDiensten') ?></h5>
                    <p class="footer-section-label"><?php echo t('menuWarmtepompen') ?></p>
					<a class="footer-link ms-3" href="<?php echo $prefix ?>warmtepomp/warmtepomp.php"><?php echo t('menuWarmtepompenWarmtepompen') ?></a>
					<a class="footer-link ms-3" href="<?php echo $prefix ?>warmtepomp/warmtepompairco.php"><?php echo t('menuWarmtepompenAirco') ?></a>
					<a class="footer-link ms-3" href="<?php echo $prefix ?>warmtepomp/condensatieketel.php"><?php echo t('menuWarmtepompenCondensatieketel') ?></a>
                    <p class="footer-section-label mt-3"><?php echo t('menuAircos') ?></p>
					<a class="footer-link ms-3" href="<?php echo $prefix ?>airco/metbuitenunit.php"><?php echo t('menuAircoBuitenUnit') ?></a>
					<a class="footer-link ms-3" href="<?php echo $prefix ?>airco/zonderbuitenunit.php"><?php echo t('menuAircoZonderBuitenUnit') ?></a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h5 class="text-light mb-4"><?php echo t('footerQuickLinks') ?></h5>
                    <a class="footer-link" href="<?php echo $prefix ?>merken.php"><?php echo t('menuMerken') ?></a>
                    <a class="footer-link" href="<?php echo $prefix ?>promoties.php"><?php echo t('menuPromoties') ?></a>
                    <a class="footer-link" href="<?php echo $prefix ?>premies.php"><?php echo t('menuPremies') ?></a>
                    <a class="footer-link" href="<?php echo $prefix ?>contact.php"><?php echo t('menuContact') ?></a>
                </div>
                <!-- <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4"><?php echo t('footerVolgOns') ?></h5>
                    <div class="d-flex">
                        <a class="btn btn-square rounded-circle me-1" href=""><i class="fab fa-facebook-f"></i></a>
                    </div>
                </div> -->
            </div>
        </div>
        <div class="container-fluid copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a href="http://www.warmtepompen-leuven.be"><?php echo t('titleHome') ?></a>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <small>WebDesign by <a href="http://www.fimar.be" target="_blank">FiMar Consulting bv</a></small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->