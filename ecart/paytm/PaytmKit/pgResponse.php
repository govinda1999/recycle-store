<?php
session_start();
if (!isset($_SESSION["id"])) {
	header("location:http://localhost/recycle-store/login.php");
}
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// following files need to be included
require_once("./lib/config_paytm.php");
require_once("./lib/encdec_paytm.php");
include "../../../config.php";
require_once('../../mail/vendor/autoload.php');
$paytmChecksum = "";
$paramList = array();
$isValidChecksum = "FALSE";

$paramList = $_POST;
$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg

//Verify all parameters received from Paytm pg to your application. Like MID received from paytm pg is same as your application�s MID, TXN_AMOUNT and ORDER_ID are same as what was sent by you to Paytm PG for initiating transaction etc.
$isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); //will return TRUE or FALSE string.


if ($isValidChecksum == "TRUE") {
	if ($_POST["STATUS"] == "TXN_SUCCESS") {
		echo "<b>Transaction status is success</b>" . "<br/>";
		//Process your transaction here as success transaction.
		//Verify amount & order id received from Payment gateway with your application's order id and amount.
		$sql = "SELECT p_id,qty FROM cart WHERE user_id = " . $_SESSION["id"];
		$query = mysqli_query($link, $sql);
		if (mysqli_num_rows($query) > 0) {

			while ($row = mysqli_fetch_array($query)) {
				$product_id[] = $row["p_id"];
				$qty[] = $row["qty"];
			}

			for ($i = 0; $i < count($product_id); $i++) {
				$sql = "INSERT INTO orders (id,user_id,p_id,qty,tran_id,p_status) VALUES (NULL," . $_SESSION["id"] . "," . $product_id[$i] . "," . $qty[$i] . "," . $_POST["TXNID"] . ",'Completed')";
				mysqli_query($link, $sql);
			}

			$sql = "DELETE FROM cart WHERE user_id = " . $_SESSION["id"];
			mysqli_query($link, $sql);
			$sql = "SELECT email from user where id = " . $_SESSION["id"];
			$query = mysqli_query($link, $sql);
			if (mysqli_num_rows($query) > 0) {
				while ($row = mysqli_fetch_array($query)) {
					$email = $row["email"];
					$amt = $_POST["TXNAMOUNT"];
					$tra = $_POST["TXNID"];
					echo $email . " " . $amt . " " . $tra;
					// send_mail($email, $amt, $tra);
				}
			}
			header("location:http://localhost/recycle-store/ecart");
		}
	} else {
		echo "<b>Transaction status is failure</b>" . "<br/>";
		header("location:http://localhost/recycle-store/ecart/cancel.php");
	}
} else {
	echo "<b>Checksum mismatched.</b>";
	//Process transaction as suspicious.
}



function send_mail($address, $amt, $tran)
{

	$mail = new PHPMailer(true);

	try {
		//Server settings
		$mail->SMTPDebug = 0;
		$mail->isSMTP();
		$mail->Host = 'tls://smtp.gmail.com:587';
		$mail->SMTPAuth   = true;
		$mail->Username   = 'email address';
		$mail->Password   = 'password';
		$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
		$mail->Port       = 587;

		//Recipients
		$mail->setFrom('email address', 'Govinda Patel');
		$mail->addAddress($address);


		// Attachments
		// Optional name

		// Content
		$mail->isHTML(true);
		$mail->Subject = 'Thank you for using Recycle Store';
		$mail->Body    = "Dear User,<br><br>Thank you for payment on Recycle Store.<br>Your Transaction no is <b>$tran</b> and Amount is <b>$amt</b>.";

		if (!$mail->send()) {
			echo 'Mailer Error: ' . $mail->ErrorInfo;
		} else {
			echo 'Message sent!';
		}
	} catch (Exception $e) {
		echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	}
}

// send_mail('gspatel4555@gmail.com', 200, 20191102020);
