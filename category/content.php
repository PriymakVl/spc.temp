<?php 

$cat_cn = 'Блок подготовки воздуха состоящий из фильтра-регулятора, маслораспылителя и манометра в сборе. Присоединительные размеры G1/8" ~ G1". На фильтре и малораспылителе защитный металлический стакан. Максимальное входное давление 12 Бар. ';

$cat_cu = 'Блок подготовки воздуха состоящий из фильтра-регулятора, маслораспылителя и манометра в сборе. Присоединительные размеры G1/8" ~ G1". На фильтре и малораспылителе защитный пластиковый стакан. Максимальное входное давление 10 Бар.';

$cat_fn = 'Фильтры воздуха пневматических систем высокого давления до 35 Бар с присоединительными резьбами G1/2" и G1". Сброс конденсата полуавтоматический.';

$cat_fu = 'Фильтры воздуха пневматических систем с давлением до 10 Бар с присоединительными резьбами G1/8" ~ G1". Сброс конденсата полуавтоматический или автоматический.';

$categories[] = ['name' => 'Серия CN', 'desc' => $cat_cn, 'img' => 'cat_cn.jpg'];
$categories[] = ['name' => 'Серия CU', 'desc' => $cat_cu, 'img' => 'cat_cu.jpg'];
$categories[] = ['name' => 'Серия FN', 'desc' => $cat_fn, 'img' => 'cat_fn.jpg'];
$categories[] = ['name' => 'Серия FU', 'desc' => $cat_fu, 'img' => 'cat_fu.jpg'];
 ?>

<!-- Main -->
<div class="body">
	
	<? include 'total/sidebar.php'; ?>

	<div class="body__inner">
		<main class="content">
			
			<? include 'total/breadcrumbs.php' ?>

			<h1 class="page-title">Блоки подготовки воздуха</h1>

			<!-- Category -->
			<div class="category">

				<? foreach ($categories as $category): ?>
					<a href="/product.php" class="category__item">
						<div class="category__img">
							<img src="assets/img/<?=$category['img']?>" alt="">
						</div>
						<div class="category__preview">
							<div class="category__name"><?=$category['name']?></div>
							<div class="category__desc"><?=$category['desc']?></div>
						</div>
					</a>
				<? endforeach; ?>
			</div>


		</main>
	</div> <!-- /.body__inner -->

</div> <!-- /.body -->

<!-- Script -->
<script type="text/javascript">
document.querySelectorAll('.catalog__item').forEach(function(el) {
   el.style.display = 'none';
});
</script>
