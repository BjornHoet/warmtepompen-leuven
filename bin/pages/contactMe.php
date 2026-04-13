<?php
$prefix = '../../';
include '../init.php';

$_SESSION["mailContactStatus"] = '';

$name = $_POST['contactName'];
$street = $_POST['contactStreet'];
$number = $_POST['contactHouseNumber'];
$postalcode = $_POST['contactPostalcode'];
$city = $_POST['contactCity'];
$email = $_POST['contactEmail'];
$phone = $_POST['contactPhone'];
$message = $_POST['contactMessage'];

$to = 'warmtepompenleuven@gmail.com';
$subject = "Warmtepompen-Leuven Contactformulier:  $name";

$output = '<html><body>';
$output .= '<p>Je hebt een nieuw bericht van het contactformulier van <strong>Warmtepompen-Leuven.be</strong></p>';
$output .= '<table style="border: 1px solid black;" cellpadding="10">';
$output .= "<tr style='background: #eee;'><td><strong>Naam:</strong> </td><td>$name</td></tr>";
$output .= "<tr><td><strong>Straat:</strong> </td><td>$street</td></tr>";
$output .= "<tr style='background: #eee;'><td><strong>Huisnummer:</strong> </td><td>$number</td></tr>";
$output .= "<tr><td><strong>Postcode:</strong> </td><td>$postalcode</td></tr>";
$output .= "<tr style='background: #eee;'><td><strong>Gemeente:</strong> </td><td>$city</td></tr>";
$output .= "<tr><td><strong>E-mail:</strong> </td><td>$email</td></tr>";
$output .= "<tr style='background: #eee;'><td><strong>Telefoon:</strong> </td><td>$phone</td></tr>";
$output .= "<tr><td><strong>Omschrijving:</strong> </td><td>$message</td></tr>";
$output .= "</table>";
$output .= "</body></html>";
	
$body = $output;

if($sendMails == true) {
	if($mailOverruleTo == true)
		$to = 'bjorn.hoeterickx@gmail.com';

	if($localhost != 'X') {
		$result = sendMailPHPMailer($to, '', $subject, $output, '', '');
		$to = 'joorisbvba@gmail.com';
		$result = sendMailPHPMailer($to, '', $subject, $output, '', '');

		if($mailOverruleTo == false) {
			$to = 'bjorn.hoeterickx@gmail.com';
			$result = sendMailPHPMailer($to, '', $subject, $output, '', '');
			}
		}
	else {
		$result = sendMailPHP($to, '', $subject, $output);
		}
	}

//header('Location: ../../contact.php');
return $result;
exit();
?>