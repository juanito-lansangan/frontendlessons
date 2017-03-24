<?php include('data/article-data.php'); ?>
<section class="c-article-list container">
	<?php foreach ($articles as $key => $article): ?>
		<?php include('partials/article.php'); ?>
	<?php endforeach; ?>
</section>