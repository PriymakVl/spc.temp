<!-- Catalog -->
<div class="catalog">
	<ul class="catalog__list">
		<li class="catalog__header">
			Каталог товаров
			<i class="fas fa-bars catalog__burger"></i>
		</li>
		<? foreach ($catalog as $cat): ?>
			<li class="catalog__item">
				<a href="../category.php" class="catalog__link"><?=$cat?></a>
			</li>
		<? endforeach; ?>
	</ul>
</div> <!-- /.catalog -->