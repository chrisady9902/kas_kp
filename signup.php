<!DOCTYPE html>
<html>
	<head>
		<title>Signup Member - Asian Youth Day 2017</title>

		<!-- ================================== FAVICON ================================= -->
    	<link rel="shortcut icon" href="images/icon.png">

    	<!-- ============================== STYLESHEET - CSS ============================= -->
		<link rel="stylesheet" type="text/css" href="css/styleSignup.css">

		<!-- =========================== JAVASCRIPT (Database) =========================== -->
		<script type="text/javascript" src="js/jquery-2.1.3.min.js"></script>

		<!-- =============================== WEB RESPONSIVE =============================== -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	</head>
	<body>
		<!-- =============================== HEADER =============================== -->
		<div id="wrapper_menu">
			<div id="menu">
				<div id="title">
					<a href="index.php"><h1>Asian Youth Day 2017</h1></a>
				</div>
				<div id="wrapper_login">
					<a href="login.php">
						<div id="login">
							Login
						</div>
					</a>
				</div>
			</div>
		</div>

		<!-- =============================== SECTION =============================== -->
		<div id="section">
			<div id="wrapper_left">
				<center>
				<div id="wrapper_index">
					<div id="index">
						<a href="index.php">
							<img src="images/home.png"/>
							<h1>Back to Home</h1>
						</a>
					</div>
				</div>
				</center><hr>
				<center>
				<div id="wrapper_signup">
					<div id="signup">
						<a href="signup.php">
							<img src="images/signup.png"/>
							<h1>Signup Member</h1>
						</a>
					</div>
				</div>
				</center><hr>
				<center>
				<div id="wrapper_log">
					<div id="log">
						<a href="login.php">
							<img src="images/login.png"/>
							<h1>Login Member</h1>
						</a>
					</div>
				</div>
				</center><hr>
			</div>
			<div id="wrapper_right">
				<?php
				include "phpqrcode/qrlib.php"; //<-- plugin
				 
				$tempdir = "temp/"; //<-- folder temp untuk simpen
				if (!file_exists($tempdir))
				    mkdir($tempdir);
				 
				$isi_teks = "12354964TYIUGF";
				$namafile = "tesQR.png";
				$quality = 'H'; //ada 4 pilihan, L (Low), M(Medium), Q(Good), H(High)
				$ukuran = 5; //batasan 1 paling kecil, 10 paling besar
				$padding = 0;
				 
				QRCode::png($isi_teks,$tempdir.$namafile,$quality,$ukuran,$padding);
				function get_current_url($s, $use_forwarded_host=false)
					{
					    $ssl = (!empty($s['HTTPS']) && $s['HTTPS'] == 'on') ? true:false;
					    $sp = strtolower($s['SERVER_PROTOCOL']);
					    $protocol = substr($sp, 0, strpos($sp, '/')) . (($ssl) ? 's' : '');
					    $port = $s['SERVER_PORT'];
					    $port = ((!$ssl && $port=='80') || ($ssl && $port=='443')) ? '' : ':'.$port;
					    $host = ($use_forwarded_host && isset($s['HTTP_X_FORWARDED_HOST'])) ? $s['HTTP_X_FORWARDED_HOST'] : (isset($s['HTTP_HOST']) ? $s['HTTP_HOST'] : null);
					    $host = isset($host) ? $host : $s['SERVER_NAME'] . $port;
					    return $protocol . '://' . $host . $s['REQUEST_URI'];
					}
				?>

				<!-- <img src="temp/coba.png">-->
				<center>
				<form action="langganan.php" method="post">
				<table>
					<tbody>
						<tr>
							<td colspan="3" style="font-weight: bold;padding: 8px;height: 19px;text-align: center;background-color: #555;color: white">FORM REGISTRATION</td>
						</tr>
						<tr>
							<td style="font-weight: bold;padding: 10px;">Full Name *</td>
						</tr>
						<tr>
							<td style="padding: 0px 10px 10px 10px;"><input style="width: 574px;height: 28px;border-radius: 5px;border: 1px solid black;" name="name" type="text"></td>
						</tr>
						<tr>
							<td style="font-weight: bold;padding: 10px;">Type of Identity *</td>
						</tr>
						<tr>
							<td style="padding: 0px 10px 10px 10px;">
								<select name="type_identity" style="width: 578px;height: 32px;border-radius: 5px;border: 1px solid black;" >
									<option>- Select a value -</option>
									<option value="KTP" >KTP</option>
									<option value="SIM" >SIM</option>
									<option value="Paspor" >Paspor</option>
								</select>
							</td>
						</tr>
						<tr>
							<td style="font-weight: bold;padding: 10px;">Identity Number *</td>
						</tr>
						<tr>
							<td style="padding: 0px 10px 10px 10px;"><input style="width: 574px;height: 28px;border-radius: 5px;border: 1px solid black;" name="number_identity" type="text" ></td>
						</tr>
						<tr>
							<td style="font-weight: bold;padding: 10px;">Nationality *</td>
						</tr>
						<tr>
							<td style="padding: 0px 10px 10px 10px;">
								<select name="nationality" style="width: 578px;height: 32px;border-radius: 5px;border: 1px solid black;" >
									<option>- Select a value -</option>
									<option value="Indonesian" >Indonesian</option>
									<option value="Foreign" >Foreign</option>
								</select>
							</td>
						</tr>
						<tr>
							<td style="font-weight: bold;padding: 10px;">Gender *</td>
						</tr>
						<tr>
							<td style="padding: 0px 10px 10px 10px;">
								<input type="radio" name="gender" value="Male" >Male
								<input type="radio" name="gender" value="Female" >Female
							</td>
						</tr>
						<tr>
							<td style="padding: 10px;"></td>
						</tr>
						<tr>
							<td style="font-weight: bold;padding: 10px;">Username *</td>
						</tr>
						<tr>
							<td style="padding: 0px 10px 10px 10px;"><input style="width: 574px;height: 28px;border-radius: 5px;border: 1px solid black;" name="username" type="text" ></td>
						</tr>
						<tr>
							<td style="font-weight: bold;padding: 10px;">Password *</td>
						</tr>
						<tr>
							<td style="padding: 0px 10px 10px 10px;"><input style="width: 574px;height: 28px;border-radius: 5px;border: 1px solid black;" name="password" type="password" ></td>
						</tr>
						<tr>
							<td style="font-weight: bold;padding: 10px;">E - Mail *</td>
						</tr>
						<tr>
							<td style="padding: 0px 10px 10px 10px;"><input style="width: 574px;height: 28px;border-radius: 5px;border: 1px solid black;" name="email" type="text" ></td>
						</tr>
						<tr>
							<td style="font-weight: bold;padding: 10px;">QR-Code *</td>
						</tr>
						<tr>
							<td style="padding: 0px 10px 10px 10px;"><input style="width: 574px;height: 28px;border-radius: 5px;border: 1px solid black;" name="qrcode" type="text" ></td>
						</tr>
						<tr>
							<td><input type="submit" value="Submit" name="tbl"/></td>
						</tr>
					</tbody>
				</table>
				</form>
				</center>
			</div>
		</div>
	</body>
</html>