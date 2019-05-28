<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Payment UI</title>
	<meta name="description" content="This payment UI connects with the faucethub API for faucet owners to pay their users manually without directly intergrating the API into their website.">

	<!-- CSS files -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
	<link href="https://fonts.googleapis.com/css?family=Lato|PT+Sans" rel="stylesheet">
	<link rel="stylesheet" href="<?= htmlspecialchars(ASSETPATH) ?>css/paymentui.css" />

	<!-- Javascript files -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/mootools/1.4.1/mootools-yui-compressed.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/processing.js/1.6.6/processing.min.js"></script>
	<script type="text/javascript" src="<?= htmlspecialchars(ASSETPATH) ?>js/paymentui.js"></script>

    <!-- Custom-Style to Remove margin between title and body -->
    <style>
      .navbar{
        margin-bottom:0;
        border-radius:0; 
      }
    </style>
</head>
<body>
	<!-- Header -->
	<header>
      	<?php include 'mainmenu.php'; ?> 
	</header>
	
	<!-- Content -->
	<div id="content">