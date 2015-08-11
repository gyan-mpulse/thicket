<?php session_start(); 
	
	if ($location == 'login') {
		if ($_SESSION['username']) {
		header("Location: ".url);	
		}	
	}
	
?>
<html>
	<head>
		<title><?php 
				if ($titleSeparator) echo $documentTitle." ".titleSeparator." ";
				echo($websiteTitle); 
			?></title>
		<link rel='stylesheet' type='text/css' href='<?php echo(url.staticPath); ?><?php if (!dynamicStyles) {echo "/engine/modules/style.css";} else {echo "/css/style.php"; } ?>' />
		<link href="<? if (iconFont) {echo iconFont; } ?>" rel="stylesheet">
      	<meta name='description' content='<?php echo description; ?>'>
      	<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=no'>
	  	<meta name="google-signin-client_id" content="<?php if (googleSignIn) { echo googleSignIn; } ?>">
	</head>
	<body>
		<?php include_once('_header_bar_only.php'); ?>