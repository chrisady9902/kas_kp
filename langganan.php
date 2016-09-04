<?php
	function auto_respon($email)
	{
 		include_once("class.phpmailer.php");
 		$mail = new PHPMailer();
 		$mail->IsMail();
 		$mail->From   = "admin@ayd2017.hol.es ";
 		$mail->Subject = "Validasi E-Mail";
 		$mail->Body = "Terima Kasih telah melakukan Pendaftaran Asian Youth Day 2017";
 		$mail->AddAddress($email);
 		$mail->IsHTML(true);
 		if(!$mail->Send())
 		{
 			return FALSE;
 		} else {
   			return TRUE;
 		}
 	}

 	$aksi = $_POST['tbl'];
 	$mail = $_POST['email'];
 	if($aksi=="Submit")
 	{
 		if(auto_respon($mail))
 		{
 			echo"Terima Kasih telah melakukan Pendaftaran Asian Youth Day 2017!";
 		} else
 		{
 			echo"Terjadi Kesalahan, Silahkan Ulangi Kembali!";
 		}}
?>