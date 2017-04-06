<article class="s-article [ u-mlr-r20 u-border-bot-gray-2r ] js-article">
	<h3 class="s-article__title"><a href="#"><?php echo $article['title']; ?></a></h3>
	
	<figure class="o-image">
		<a class="u-block-link" href="#" title="tooltip"></a>
		<picture class="o-image__picture">
			<source media="(min-width: 0px)" srcset="<?php echo $article['images']['default']; ?>">
			<img class="u-border-radius-r4" src="<?php echo $article['images']['default']; ?>" alt="image text">
		</picture>
		<figcaption class="o-image__caption"></figcaption>
	</figure>

	<div class="s-article__content">
		<?php echo $article['content']; ?>
	</div>

	<footer class="s-article__footer">
		<ul class="o-tag">
			<?php foreach($article['tags'] as $key => $tag): ?>
				<li class="o-tag__item">
					<a href="<?php echo $tag['url']; ?>">
						<?php echo $tag['name']; ?>
					</a>
				</li>
			<?php endforeach; ?>
		</ul>
	</footer>

	<time class="s-article__time">
		<a href="#0">
			<span><?php echo $article['date']; ?></span>
		</a>
	</time>
</article>