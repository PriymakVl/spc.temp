<!-- Breadcrumbs  -->
<div class="breadcrumbs">
	<a href="/" class="breadcrumbs__link">Главная</a>
	<span class="breadcrumbs__del">/</span>
	<a href="" class="breadcrumbs__link">Подготовка воздуха</a>
	<span class="breadcrumbs__del">/</span>
	<? if (basename($_SERVER["REQUEST_URI"], '.php') == 'category'): ?>
		<span class="breadcrumbs__active">Блоки подготовки воздуха</span>
	<? elseif(basename($_SERVER["REQUEST_URI"], '.php') == 'product'): ?>
		<a href="category.php" class="breadcrumbs__link">Блоки подготовки воздуха</a>
		<span class="breadcrumbs__del">/</span>
		<span class="breadcrumbs__active">Серия CN</span>
	<? elseif(basename($_SERVER["REQUEST_URI"], '.php') == 'view'): ?>
		<a href="category.php" class="breadcrumbs__link">Блоки подготовки воздуха</a>
		<span class="breadcrumbs__del">/</span>
		<a href="product.php" class="breadcrumbs__link">Серия CN</a>
	<? endif; ?>

</div>