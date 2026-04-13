<?php
$prefix = '';
include 'bin/init.php';

$title = t('titleContact');
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
            <h1 class="display-4 text-white animated slideInDown mb-4"><?php echo t('menuContact') ?></h1>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <h1 class="display-6 mb-5"><?php echo t('contactTitel') ?></h1>
                    <p class="mb-4"><?php echo t('contactMailPhone') ?></p>
                    <p class="ms-3 mb-1 fw-bold"><i class="fa fa-phone-alt me-3"></i><a href="tel:<?php echo t('gsmNummer') ?>"><?php echo t('gsmNummer') ?></a></p>
                    <p class="ms-3 fw-bold"><i class="fa fa-envelope me-3"></i><a href="mailto:<?php echo t('mailAdres') ?>"><?php echo t('mailAdres') ?></a></p>
					
                    <p class="mb-4 mt-5"><?php echo t('contactDetail') ?></p>
                    <form id="formContactMe">
                        <div class="row g-3">
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" name="contactName" placeholder="<?php echo t('contactFormNaam') ?>" required>
                                    <label for="name"><?php echo t('contactFormNaam') ?></label>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="street" name="contactStreet" placeholder="<?php echo t('contactFormStraat') ?>" required>
                                    <label for="street"><?php echo t('contactFormStraat') ?></label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="housenumber" name="contactHouseNumber" placeholder="<?php echo t('contactFormHuisnummer') ?>" required>
                                    <label for="housenumber"><?php echo t('contactFormHuisnummer') ?></label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="postalcode" name="contactPostalcode" placeholder="<?php echo t('contactFormPostcode') ?>" required>
                                    <label for="postalcode"><?php echo t('contactFormPostcode') ?></label>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="city" name="contactCity" placeholder="<?php echo t('contactFormGemeente') ?>" required>
                                    <label for="city"><?php echo t('contactFormGemeente') ?></label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" name="contactEmail" placeholder="<?php echo t('contactFormEmail') ?>" required>
                                    <label for="email"><?php echo t('contactFormEmail') ?></label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="tel" class="form-control" id="phone" name="contactPhone" autocomplete="tel" placeholder="<?php echo t('contactFormGSM') ?>" required>
                                    <label for="phone"><?php echo t('contactFormGSM') ?></label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="<?php echo t('contactFormLaatBericht') ?>" id="message" name="contactMessage" style="height: 100px" required></textarea>
                                    <label for="message"><?php echo t('contactFormBericht') ?></label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary py-3 px-5" type="submit"><?php echo t('buttonVerstuur') ?></button>
                            </div>
							
							<div class="floatingMessage" id="floatingMessage"></div>
							<div class="floatingMessageError" id="floatingMessageError"></div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="min-height: 450px;">
                    <div class="position-relative overflow-hidden h-100">
                        <iframe class="position-relative w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2517.364819989826!2d4.7129129150214935!3d50.87995787953692!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c160d4b54b7b7d%3A0xaf9555d8d77965b2!2sTiensevest+38%2C+3000+Leuven!5e0!3m2!1snl!2sbe!4v1481545999499"
                        frameborder="0" style="min-height: 450px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

	<?php include("includes/footer.php"); ?> 
	
	<?php include("includes/scripts.php"); ?> 

  <script>
	// Contact
	$('#formContactMe').on('submit', function(e) {
		$('#contactSubmit').prop('disabled', true);
		e.preventDefault(); // Prevent full page reload
 		$.ajax({
			url: '<?php echo $prefix ?>bin/pages/contactMe.php', // Your PHP processing file
			type: 'POST',
			data: $(this).serialize(), // Sends all form data
			success: function(response) {
				console.log(response);
				$('#name').val('');
				$('#street').val('');
				$('#housenumber').val('');
				$('#postalcode').val('');
				$('#city').val('');
				$('#email').val('');
				$('#phone').val('');
				$('#message').val('');
				$('#contactSubmit').prop('disabled', false);
				displayOkMessage('Mail verstuurd');
				},
			error: function(xhr, status, error) {
				displayErrorMessage('Er heeft zich een probleem voorgedaan. Gelieve een E-mail te sturen.');
				console.log(error);
			}
		});
	});

	function displayOkMessage(message) {
		$('#floatingMessage').text(message).fadeIn();
		setTimeout(function() {
			$('#floatingMessage').fadeOut();
		}, 3000); // hide after 3 seconds
	}		

	function displayErrorMessage(message) {
		$('#floatingMessageError').text(message).fadeIn();
		setTimeout(function() {
			$('#floatingMessageError').fadeOut();
		}, 3000); // hide after 3 seconds
	}		
  </script>	
</body>

</html>