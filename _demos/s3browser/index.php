<?php
$time_start = microtime(true);

error_reporting(E_ALL);

require_once('../../tarzan.class.php');
require_once('./php/_s3browser.php');

$s3 = new AmazonS3();
$browser = new S3Browser($s3, array(
	'cache' => './cache',
	'images' => './images',
	'templates' => './templates',
	'cache_duration' => 3600,
));

?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
	"http://www.w3.org/TR/html4/strict.dtd">

<html>
	<head>
		<title>S3 Browser</title>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8">
		<link rel="stylesheet" href="./css/base.css" type="text/css" media="screen" title="Default" charset="utf-8">
		<link rel="stylesheet" href="./css/s3browser.css" type="text/css" media="screen" title="Default" charset="utf-8">
	</head>

	<body>
		<div id="site-wrapper">
			<div id="site" class="s3browser">

				<h1>S3 Browser</h1>
				<div id="content">

					<?php $browser->generate('s3.ryanparman.com'); ?>

				</div>

				<div id="footer">
					<p class="footnote" align="center">Created by <a href="http://ryanparman.com">Ryan Parman</a>. Page rendered in <?php $time = microtime(true) - $time_start; echo $time . ' seconds'; ?></p>
				</div>
			</div>
		</div>
	</body>
</html>