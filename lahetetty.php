<?php
if( ! isset( $_POST ) ) {
	header('location: http://kielipalvelusi.fi');
}
else {
	$email_to = "info@kielipalvelusi.fi";
	$subject = "yhteydenotto";
	
	$message = "Yhteydenottopyyntö kielipalvelu.fi sivustolta\n\n";
	$message .= "Nimi: ".$_POST['nimi']."\n";
	$message .= "Puhelinnumero: ".$_POST['puhelin']."\n";
	$message .= "Email: ".$_POST['email']."\n\n";
	$message .= "Viesti: ".$_POST['viesti']."\n";
	
	$headers = 'From: info@kielipalvelu.fi'."\r\n";
	$headers .= 'Reply-To: '.$_POST['email']."\r\n";
	
	mail( $email_to, $subject, $message, $headers );
}
?>
<!DOCTYPE html>
<!--
	Interphase by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Kielipalvelusi</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<h1><a href="index.html">kielipalvelusi.fi</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="index.html">Aloitus</a></li>
						<li><a href="generic.html">Yhteydenotto</a></li>
						<li><a href="elements.html">Referenssit</a></li>
					</ul>
				</nav>
			</header>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="container">

					<!-- Form -->
						<section>
							<h3>Yhteydenottopyynt&ouml;</h3>
							<p>Kiitos yhteydenotostasi! Otamme yhteytt&auml; Sinuun pikaisesti.</p>
							Palaa takaisin <a href="http://kielipalvelusi.fi">kielipalvelusi.fi</a> sivuille
						</section>

	

	</body>
</html>