<?php
function asEuro($value) {
  return number_format($value, 2, "," , ".") . ' EUR';
}

function outputErrors($errors) {
	$output = array();
	foreach($errors as $error) {
		$output[] = '<li>' . $error . '</li>';
	}
	$outputErrors = '<ul class="list-unstyled" style="margin-left:20px; margin-top:10px;">' . implode('', $output) . '</ul>';
	$_SESSION['outputErrors'] = $outputErrors;
}

function outputErrorsForgot($errors) {
	$output = array();
	foreach($errors as $error) {
		$output[] = '<li>' . $error . '</li>';
	}
	$outputErrors = '<ul class="list-unstyled" style="margin-left:20px; margin-top:10px;">' . implode('', $output) . '</ul>';
	$_SESSION['outputErrorsForgot'] = $outputErrors;
}

function array_msort($array, $cols) {
    $colarr = array();
    foreach ($cols as $col => $order) {
        $colarr[$col] = array();
        foreach ($array as $k => $row) { $colarr[$col]['_'.$k] = strtolower($row[$col]); }
		}
		
    $eval = 'array_multisort(';
    foreach ($cols as $col => $order) {
        $eval .= '$colarr[\''.$col.'\'],'.$order.',';
		}
		
    $eval = substr($eval,0,-1).');';
    eval($eval);
    $ret = array();
    foreach ($colarr as $col => $arr) {
        foreach ($arr as $k => $v) {
            $k = substr($k,1);
            if (!isset($ret[$k])) $ret[$k] = $array[$k];
            $ret[$k][$col] = $array[$k][$col];
			}
		}
		
    return $ret;
	}

    function getDayName($date) {
		$dayOfWeek = date('w', strtotime($date));
        switch ($dayOfWeek){
            case 6:
                return 'Za';
            case 0:
                return 'Zo';
            case 1:
                return 'Ma';
            case 2:
                return 'Di';
            case 3:
                return 'Wo';
            case 4:
                return 'Do';
            case 5:
                return 'Vr';
            default:
                return '';
			}
		}
	
function sendMailPHPMailer($to, $toName, $subject, $body, $summary, $date) {
	$mailSmtp = 'send.one.com';
	$mailUser = 'noreply@warmtepompen-leuven.be';
	$mailPass = '1P1rRofy3c10d10Q';
	$mailFrom = 'noreply@warmtepompen-leuven.be';
	$mailFromName = 'Warmtepompen-Leuven';	
	
	require_once('../../assets/PHPMailer-master/src/Exception.php');
	require_once('../../assets/PHPMailer-master/src/PHPMailer.php');
	require_once('../../assets/PHPMailer-master/src/SMTP.php');
	
	$mail = new PHPMailer\PHPMailer\PHPMailer(true);

	try {
		// SMTP setup
		$mail->isSMTP();
		$mail->Host       = $mailSmtp;
		$mail->SMTPAuth   = true;
		$mail->Username   = $mailUser;
		$mail->Password   = $mailPass;
		$mail->SMTPSecure = 'tls';
		$mail->Port       = 587;

		// Email addresses
		$mail->setFrom($mailFrom, $mailFromName);
		$mail->addAddress($to, $toName);

		$mail->Subject = $subject;
		$mail->isHTML(true);

		// HTML and plain text parts
		$mail->Body    = $body;
		
		if($date != '' && $summary != '') {
			// Generate ICS content
			$startTime = date('Ymd\T193000', strtotime( $date ));
			$endTime = date('Ymd\T230000', strtotime( $date ));
			$uid = uniqid();
			$organizer = 'MAILTO:' . $mailFrom;
		
			$ical = <<<EOD
					BEGIN:VCALENDAR
					VERSION:2.0
					CALSCALE:GREGORIAN
					METHOD:REQUEST
					PRODID:-//Your Company//App//EN
					BEGIN:VEVENT
					UID:$uid
					DTSTAMP:$startTime
					DTSTART:$startTime
					DTEND:$endTime
					SUMMARY:$summary
					DESCRIPTION:Discuss the roadmap and tasks.
					ORGANIZER;CN=$mailFromName:$organizer
					ATTENDEE;CN=Recipient;RSVP=TRUE:mailto:$to
					LOCATION;LANGUAGE=nl-NL:Martelarenplein 12 - 3000 Leuven
					SEQUENCE:0
					STATUS:CONFIRMED
					TRANSP:OPAQUE
					BEGIN:VALARM
					TRIGGER:-PT60M
					ACTION:DISPLAY
					DESCRIPTION:Reminder
					END:VALARM
					END:VEVENT
					END:VCALENDAR
					EOD;
					
			// Attach ICS inline as calendar part
			$mail->addStringAttachment(
				$ical,
				'invite.ics',
				'base64',
				'text/calendar; method=REQUEST; name="invite.ics"'
			);
		}

		$mail->send();
		return true;
	} catch (Exception $e) {
		echo $e;
		return false;
		}
	}

function sendMailPHP ($to, $toName, $subject, $body) {
	$mailFrom = 'noreply@warmtepompen-leuven.be';
	$mailFromName = 'Warmtepompen-Leuven';	
	
	$headers = "From: $mailFromName <$mailFrom>\r\n";
	$headers .= "Reply-To: " . $to . "\r\n";	
	$headers .= "Organization: $mailFromName\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	$headers .= "X-Priority: 3\r\n";
	$headers .= "X-Mailer: PHP". phpversion() ."\r\n";
	
	if (mail($to, $subject, $body, $headers)) {
		return true;
	} else {
		return false;
		}	
	}
?>