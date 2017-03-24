<article class="s-article js-article">
	<h2 class="s-article__title"><a href="#"><?php echo $article['title']; ?></a></h2>
	
	<figure class="o-image">
		<a class="u-block-link" href="#" title="tooltip"></a>
		<picture class="o-image__picture">
			<source media="(min-width: 0px)" srcset="https://lh6.googleusercontent.com/-wL668xtWx0I/AAAAAAAAAAI/AAAAAAAAAAA/5iH4rLa5Gok/s128-c-k/photo.jpg">
			<img src="https://lh6.googleusercontent.com/-wL668xtWx0I/AAAAAAAAAAI/AAAAAAAAAAA/5iH4rLa5Gok/s128-c-k/photo.jpg" alt="image text">
		</picture>
		<figcaption class="o-image__caption"></figcaption>
	</figure>

	<div class="s-article__content">
		<?php echo $article['content']; ?>
	</div>

	<footer class="s-article__tags">
		<ul class="o-list">
			<?php foreach($article['tags'] as $key => $tag): ?>
				<li class="o-list__item">
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