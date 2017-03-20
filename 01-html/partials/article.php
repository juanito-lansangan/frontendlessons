<article class="js-article o-article">
	<h2 class="o-article__title"><a href="#"><?php echo $article['title']; ?></a></h2>
	

	<div class="o-article__content">
		<?php echo $article['content']; ?>
	</div>

	<footer class="o-article__tags">
		<ul class="o-list">
			<?php foreach($article['tags'] as $key => $tag): ?>
				<li class="o-list__item"><a href="<?php echo $tag['url']; ?>"><?php echo $tag['name']; ?></a></li>
			<?php endforeach; ?>
		</ul>
	</footer>

	<time class="o-article__time">
		<a href="#0">
			<span><?php echo $article['date']; ?></span>
		</a>
	</time>
</article>