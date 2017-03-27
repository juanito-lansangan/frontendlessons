<!DOCTYPE html>
<html>
<head>
	<title>Html - Blog Layout</title>
	<link href="https://fonts.googleapis.com/css?family=Lora|Montserrat|Roboto+Slab" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="dist/css/main.css">
</head>
<body>

	<?php include('partials/navigation.php'); ?>
	<?php include('partials/burger-navigation-overlay.php'); ?>
	<main class="s-main">
		<?php include('partials/hero.php'); ?>
		<?php include('partials/article-list.php'); ?>
	</main>

	<foother class="o-footer">
		<a href="#" class="o-footer__nav">Newer Posts</a>
		<a href="#" class="o-footer__nav">Older Posts</a>
	</footer>

</body>
</html>