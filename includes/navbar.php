    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">
        <a href="<?php echo $prefix ?>index.php" class="navbar-brand d-flex align-items-center">
            <img class="img-fluid me-3" src="<?php echo $prefix ?>img/logo.png" alt="">
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto bg-light pe-4 py-3 py-lg-0">
                <a href="<?php echo $prefix ?>index.php" <?php if(str_contains($_SERVER['SCRIPT_NAME'], "index.php")) { ?> class="nav-item nav-link active" <?php } else { ?>class="nav-item nav-link" <?php } ?>><?php echo t('menuHome') ?></a>
                <div class="nav-item dropdown">
                    <a href="#" <?php if( (str_contains($_SERVER['SCRIPT_NAME'], "warmtepomp.php") || str_contains($_SERVER['SCRIPT_NAME'], "warmtepompairco.php") || str_contains($_SERVER['SCRIPT_NAME'], "condensatieketel.php")) ) { ?> class="nav-link dropdown-toggle active" <?php } else { ?>class="nav-link dropdown-toggle" <?php } ?> data-bs-toggle="dropdown"><?php echo t('menuWarmtepompen') ?></a>
                    <div class="dropdown-menu bg-light border-0 m-0">
                        <a href="<?php echo $prefix ?>warmtepomp/warmtepomp.php" <?php if(str_contains($_SERVER['SCRIPT_NAME'], "warmtepomp.php")) { ?> class="dropdown-item active" <?php } else { ?>class="dropdown-item" <?php } ?>><?php echo t('menuWarmtepompenWarmtepompen') ?></a>
                        <a href="<?php echo $prefix ?>warmtepomp/warmtepompairco.php" <?php if(str_contains($_SERVER['SCRIPT_NAME'], "warmtepompairco.php")) { ?> class="dropdown-item active" <?php } else { ?>class="dropdown-item" <?php } ?>><?php echo t('menuWarmtepompenAirco') ?></a>
						<a href="<?php echo $prefix ?>warmtepomp/condensatieketel.php" <?php if(str_contains($_SERVER['SCRIPT_NAME'], "condensatieketel.php")) { ?> class="dropdown-item active" <?php } else { ?>class="dropdown-item" <?php } ?>><?php echo t('menuWarmtepompenCondensatieketel') ?></a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" <?php if( (str_contains($_SERVER['SCRIPT_NAME'], "metbuitenunit.php") || str_contains($_SERVER['SCRIPT_NAME'], "zonderbuitenunit.php")) ) { ?> class="nav-link dropdown-toggle active" <?php } else { ?>class="nav-link dropdown-toggle" <?php } ?> data-bs-toggle="dropdown"><?php echo t('menuAircos') ?></a>
                    <div class="dropdown-menu bg-light border-0 m-0">
                        <a href="<?php echo $prefix ?>airco/metbuitenunit.php" <?php if(str_contains($_SERVER['SCRIPT_NAME'], "metbuitenunit.php")) { ?> class="dropdown-item active" <?php } else { ?>class="dropdown-item" <?php } ?>><?php echo t('menuAircoBuitenUnit') ?></a>
                        <a href="<?php echo $prefix ?>airco/zonderbuitenunit.php" <?php if(str_contains($_SERVER['SCRIPT_NAME'], "zonderbuitenunit.php")) { ?> class="dropdown-item active" <?php } else { ?>class="dropdown-item" <?php } ?>><?php echo t('menuAircoZonderBuitenUnit') ?></a>
                    </div>
                </div>
                <a href="<?php echo $prefix ?>merken.php" <?php if(str_contains($_SERVER['SCRIPT_NAME'], "merken.php")) { ?> class="nav-item nav-link active" <?php } else { ?>class="nav-item nav-link" <?php } ?>><?php echo t('menuMerken') ?></a>
                <a href="<?php echo $prefix ?>promoties.php" <?php if(str_contains($_SERVER['SCRIPT_NAME'], "promoties.php")) { ?> class="nav-item nav-link active" <?php } else { ?>class="nav-item nav-link" <?php } ?>><?php echo t('menuPromoties') ?></a>
                <a href="<?php echo $prefix ?>premies.php" <?php if(str_contains($_SERVER['SCRIPT_NAME'], "premies.php")) { ?> class="nav-item nav-link active" <?php } else { ?>class="nav-item nav-link" <?php } ?>><?php echo t('menuPremies') ?></a>
                <a href="<?php echo $prefix ?>contact.php" <?php if(str_contains($_SERVER['SCRIPT_NAME'], "contact.php")) { ?> class="nav-item nav-link active" <?php } else { ?>class="nav-item nav-link" <?php } ?>><?php echo t('menuContact') ?></a>
				<div class="lang-selection d-lg-none">
				<?php
				 if (getLanguage() === 'nl') { ?>
					<a href="<?php echo $_SERVER['PHP_SELF'] ?>?lang=fr" class="nav-item nav-link border-top">Taal: FR</a>
				<?php } else { ?>
					<a href="<?php echo $_SERVER['PHP_SELF'] ?>?lang=nl" class="nav-item nav-link border-top">Langue: NL</a>
				<?php } ?>
				</div>
            </div>
			<div class="h-100 d-lg-inline-flex align-items-center d-none">
				<?php
				 if (getLanguage() === 'nl') { ?>
					<a href="<?php echo $_SERVER['PHP_SELF'] ?>?lang=fr" class="btn btn-primary rounded-circle btn-sm-square animated me-3">FR</a>
				<?php } else { ?>
					<a href="<?php echo $_SERVER['PHP_SELF'] ?>?lang=nl" class="btn btn-primary rounded-circle btn-sm-square animated me-3">NL</a>
				<?php } ?>
			</div>
            <!--
			<div class="h-100 d-lg-inline-flex align-items-center d-none">
                <a class="btn btn-square rounded-circle bg-light text-primary me-2" href=""><i class="fab fa-facebook-f"></i></a>
            </div> -->
        </div>
    </nav>
    <!-- Navbar End -->