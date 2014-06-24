<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<?php

/* Page selection - default 0 (main page) */
$pageid=0;
if(isset($_GET['page']))$pageid = htmlspecialchars($_GET['page']);
if (!$pageid || $pageid>6 || $pageid<0){
$pageid=0;
}
/* Compatibility for old links */
if($pageid==1.6){$pageid=2.1;}
if($pageid==1.7){$pageid=2.2;}
if($pageid==1.8){$pageid=2.3;}

/* OS Selection - default to Windows */
$os="win";
if(isset($_GET['os']))$os = htmlspecialchars($_GET['os']);
if(!$os){$os="win";}
if($os != "osx" && $os !="lnx"){$os="win";}

/* JavaScript detection 
	By default,
				adds javascript redirect to "auto-yes" setting if JS is enabled
				sets value to "auto-no" and loads page w/o JS if JS is disabled
	User specified [future]
				if specified "no", does not insert any scripts
				if specified "yes", inserts all scripts except redirect
*/
$js="auto-no";
if(isset($_GET['js']))$js = htmlspecialchars($_GET['js']);
if($js!="no"){
	if($js=="auto-no"||!$js){
		echo "<script>window.location = \"/?page=$pageid&os=$os&js=auto-yes\";</script>\n";
		$js="auto-no";
	}
	else if ($js!="yes"&&$js!="auto-yes"){
		$js="auto-no";
	}
}

/* Set variable for all parameters to be appended to $pageid */
$extraparams = "&os=$os&js=$js";
?>

<head>
	<!-- ALL YOUR ENCRYPTION ARE BELONG TO US -->

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>CryptoParty ATX</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width">

	<!-- Load local copy of Google Web Fonts -->
	<link href='/css/lato.css' rel='stylesheet' type='text/css'>

	<!-- Load main css -->
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="/css/main.css">
	<link rel="stylesheet" href="/css/crypto.css">
	
<?php 
if($js=="yes"||$js=="auto-yes"){
	echo "    <!-- Image expansion, jquery -->\n";
	echo "    <link href=\"/css/lightbox.css\" rel=\"stylesheet\" />\n";
	echo "    <script src=\"/js/jquery-1.10.2.min.js\"></script>\n";
	echo "    <script src=\"/js/lightbox-2.6.min.js\"></script>\n";
	echo "    <script src=\"/js/vendor/modernizr-2.6.2.min.js\"></script>\n";
	echo "\n";
	echo "    <!-- Custom site scripts -->\n";
	echo "    <script src=\"/js/cryptosite.js\"></script>\n";
}
?>
</head>

<body>
	<!--[if lt IE 7]>
	<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
	<![endif]-->

	<div class="container">

	<div class="row">
	<div class="col-lg-3">

	<a href="?page=0<?php echo $extraparams; ?>"><div class="logo">&nbsp;</div></a>
	<div class="list-group">
		<a href="?page=0<?php echo $extraparams; ?>" class="list-group-item<?php $inactive=false; if($pageid==0||$pageid==3||$pageid==4||$pageid==5||$pageid==6)echo ' active'; else $inactive=true; ?>">About CryptoParty ATX</a>
		<a href="?page=3<?php echo $extraparams; ?>" class="list-group-item sub-item<?php if($pageid==3)echo ' subactive'; if($inactive) echo ' hideme'; ?>">Upcoming Events</a>
		<a href="?page=4<?php echo $extraparams; ?>" class="list-group-item sub-item<?php if($pageid==4)echo ' subactive'; if($inactive) echo ' hideme'; ?>">Contribute</a>
		<a href="?page=5<?php echo $extraparams; ?>" class="list-group-item sub-item<?php if($pageid==5)echo ' subactive'; if($inactive) echo ' hideme'; ?>">Links</a>
		<a href="?page=6<?php echo $extraparams; ?>" class="list-group-item sub-item<?php if($pageid==6)echo ' subactive'; if($inactive) echo ' hideme'; ?>">Contact Us</a>
		<a href="?page=1<?php echo $extraparams; ?>" class="list-group-item<?php $inactive=false; if($pageid >= 1 && $pageid < 2)echo ' active'; else $inactive=true; ?>">Encryption How-To Guides</a>
		<a href="?page=1.1<?php echo $extraparams; ?>" class="list-group-item sub-item<?php if($pageid==1.1)echo ' subactive'; if($inactive) echo ' hideme'; ?>">Email Encryption</a>
		<a href="?page=1.2<?php echo $extraparams; ?>" class="list-group-item sub-item<?php if($pageid==1.2)echo ' subactive'; if($inactive) echo ' hideme'; ?>">File and Folder Encryption</a>
		<a href="?page=1.3<?php echo $extraparams; ?>" class="list-group-item sub-item<?php if($pageid==1.3)echo ' subactive'; if($inactive) echo ' hideme'; ?>">Instant Message Encryption</a>
		<a href="?page=1.4<?php echo $extraparams; ?>" class="list-group-item sub-item<?php if($pageid==1.4)echo ' subactive'; if($inactive) echo ' hideme'; ?>">Text Message (SMS) Encryption</a>
		<a href="?page=1.5<?php echo $extraparams; ?>" class="list-group-item sub-item<?php if($pageid==1.5)echo ' subactive'; if($inactive) echo ' hideme'; ?>">Encrypted Web Browsing</a>
		<a href="?page=1.9<?php echo $extraparams; ?>" class="list-group-item sub-item<?php if($pageid==1.9)echo ' subactive'; if($inactive) echo ' hideme'; ?>">Install Linux Mint</a>
		<a href="?page=2<?php echo $extraparams; ?>" class="list-group-item<?php $inactive=false; if($pageid >= 2 && $pageid < 3)echo ' active'; else $inactive=true; ?>">Privacy Guides</a>
		<a href="?page=2.6<?php echo $extraparams; ?>" class="list-group-item sub-item<?php if($pageid==2.6)echo ' subactive'; if($inactive) echo ' hideme'; ?>">Privacy Plug-ins</a>
		<a href="?page=2.1<?php echo $extraparams; ?>" class="list-group-item sub-item<?php if($pageid==2.1)echo ' subactive'; if($inactive) echo ' hideme'; ?>">Choosing Secure Passwords</a>
		<a href="?page=2.4<?php echo $extraparams; ?>" class="list-group-item sub-item<?php if($pageid==2.4)echo ' subactive'; if($inactive) echo ' hideme'; ?>">Obscuring Metadata</a>
		<a href="?page=2.2<?php echo $extraparams; ?>" class="list-group-item sub-item<?php if($pageid==2.2)echo ' subactive'; if($inactive) echo ' hideme'; ?>">Keysigning and Keyservers</a>
		<a href="?page=2.3<?php echo $extraparams; ?>" class="list-group-item sub-item<?php if($pageid==2.3)echo ' subactive'; if($inactive) echo ' hideme'; ?>">Securely Erasing Data</a>
		<a href="?page=2.5<?php echo $extraparams; ?>" class="list-group-item sub-item<?php if($pageid==2.5)echo ' subactive'; if($inactive) echo ' hideme'; ?>">Throw a CryptoParty</a>
	</div>
	<div>
		<!--Follow <a href="https://twitter.com/atxcrypto">@ATXCrypto on Twitter</a><br />-->
		Subscribe to the <a href="https://cryptoglass.us/mailman/listinfo/rt4atx-list">RT4ATX email list</a><br />
		BTC: <span class="btc">12Wb817YGmhA9qZnfBVaP4WCE3r5dFxUZr</span>
	</div>
	
	<?php include "tweets.php"; ?>

	</div>
	<div class="col-lg-9">


	<!-- BEGIN page-specific content -->
	<?php

	if ($pageid==0){
	include "content/ATX.html";
	}
	else if ($pageid==1){
	include "content/how-to.html";
	}
	else if ($pageid==1.1){
	include "content/HT-EMAIL.html";
	}
	else if ($pageid==1.2){
	include "content/HT-FILE.html";
	}
	else if ($pageid==1.3){
	include "content/HT-OTR.html";
	}
	else if ($pageid==1.4){
	include "content/HT-SMS.html";
	}
	else if ($pageid==1.5){
	include "content/HT-WEB.html";
	}
	// $pageid 1.6, 1.7, and 1.8 are reserved for backward compatibility
	else if ($pageid==1.9){
	include "content/HT-MINT.html";
	}


	else if ($pageid==2){
	include "content/privacy.html";
	}	
	else if ($pageid==2.1){
	include "content/HT-PASSWD.html";
	}
	else if ($pageid==2.2){
	include "content/HT-KEYS.html";
	}
	else if ($pageid==2.3){
	include "content/HT-DELETE.html";
	}
	else if ($pageid==2.4){
	include "content/HT-META.html";
	}
	else if ($pageid==2.5){
	include "content/HT-PARTY.html";
	}
	else if ($pageid==2.6){
	include "content/HT-PLUGINS.html";
	}

	else if ($pageid==3){
	include "content/events.html";
	}
	else if ($pageid==4){
	include "content/contrib.html";
	}
	else if ($pageid==5){
	include "content/links.html";
	}
	else if ($pageid==6){
	include "contact/contact.php";
	}


	?>
	<!-- END page-specific content -->
	<hr>
	<!-- Contact info -->
	<p><strong>Contact Us!</strong> If you need any help, find problems with the site, or have improvements or suggestions, please contribute to the <a href="https://github.com/CryptoPartyATX/site">git repo</a> or email me at <a href="mailto:plexiglass@riseup.net">plexiglass@riseup.net</a>.</p>
	<!-- BEGIN copyright notice -->
	<p class="copyleft" xmlns:dct="http://purl.org/dc/terms/" xmlns:vcard="http://www.w3.org/2001/vcard-rdf/3.0#">
	<a rel="license" href="http://creativecommons.org/publicdomain/zero/1.0/"><img src="/images/cc0.png" style="border-style: none;" alt="CC0" /></a>
	&nbsp;To the extent possible under law, <a rel="dct:publisher" href="https://cryptopartyatx.org">CryptoPartyATX.org</a> has waived all copyright and related or neighboring rights to <span property="dct:title">CryptoPartyATX.org</span>.
	The applications referenced on this site are open-source unless otherwise noted and can be obtained at the creators' websites, listed when used. We have no affiliation with any linked site unless otherwise noted.</p>
	<!-- END copyright notice -->

	</div> <!-- /col-lg-8 -->
	</div> <!-- /row -->

	</div> <!-- /container -->
</body>
</html>