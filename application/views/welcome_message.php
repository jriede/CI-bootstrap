<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<link rel="icon" href="<?php echo asset_url();?>img/cropped-favicon-32x32.png" sizes="32x32">
	<link rel="icon" href="<?php echo asset_url();?>img/cropped-favicon-192x192.png" sizes="192x192">
	<link rel="apple-touch-icon-precomposed" href="<?php echo asset_url();?>img/cropped-favicon-180x180.png">
	<meta name="msapplication-TileImage" content="<?php echo asset_url();?>img/cropped-favicon-270x270.png">
	<link href="<?php echo asset_url();?>css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo asset_url();?>css/app.css">
	<script type = 'text/javascript' src = "<?php echo base_url();?>assets/js/ckeditor.js"></script>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
			<!-- Include all compiled plugins (below), or include individual files as needed -->
			<script src="<?php echo asset_url();?>js/bootstrap.min.js"></script>
			<script src="<?php echo asset_url();?>js/app.js"></script>

	<title>Welcome to CodeIgniter</title>

</head>
<body>

<div id="container">
	<h1>Welcome to CodeIgniter!</h1>

	<div id="body">
		<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

		<p>If you would like to edit this page you'll find it located at:</p>
		<code>application/views/welcome_message.php</code>

		<p>The corresponding controller for this page is found at:</p>
		<code>application/controllers/Welcome.php</code>

		<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>
