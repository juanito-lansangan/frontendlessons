<!DOCTYPE html>
<html>
<head>
	<title>Html - Blog Layout</title>
</head>
<body>

	<?php include('partials/navigation.php'); ?>

	<main>
		
		<?php include('partials/search.php'); ?>
		<?php include('partials/hero.php'); ?>

		<?php include('data/article-data.php'); ?>
		<?php foreach ($articles as $key => $article): ?>
			<?php include('partials/article.php'); ?>
		<?php endforeach; ?>

	</main>

	<footer>
		<a href="#">Prev</a>
		<a href="#">Next</a>
	</footer>

</body>
</html>