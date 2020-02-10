<?php 

$products[] = ['name' => 'SA-CN15-D', 'img' => 'cat_cn.jpg'];
$products[] = ['name' => 'SA-CN60-D', 'img' => 'cat_cu.jpg'];
$products[] = ['name' => 'SA-CN20-08-D', 'img' => 'cat_fn.jpg'];
$products[] = ['name' => 'SA-CN60-25-D', 'img' => 'cat_fu.jpg'];
$products[] = ['name' => 'SA-CN20-08', 'img' => 'cat_fu.jpg'];
$products[] = ['name' => 'SA-CN40-15', 'img' => 'cat_fu.jpg'];
 ?>

<!-- Main -->
<div class="body">
	
	<? include 'total/sidebar.php'; ?>

	<div class="body__inner">
		<main class="content">
			
			<? include 'total/breadcrumbs.php' ?>

			<h1 class="page-title">Блок подготовки воздуха SA-CN20-08</h1>

			<!-- Card -->
			<div class="card">

				<? foreach ($products as $product): ?>
					<a href="/view.php" class="card__item">
						<div class="card__header">
							<div class="card__mark-action">
								<i class="fas fa-gift"></i>
								Акция
							</div>
							<div class="card__item-code">код: 17475</div>
						</div>
						<div class="card__img">
							<img src="assets/img/<?=$product['img']?>" alt="">
						</div>
						<div class="card__product"><?=$product['name']?></div>
						<div class="card__cart">
							<div class="card__cart-link">
								<i class="fas fa-cart-plus card__cart-icon"></i>
								В корзину
							</div>
						</div>
						<div class="card__footer">
							<span class="card__buy-click">Купить в 1 клик</span>
							<span class="card__custom-compare">
								<i class="far fa-chart-bar"></i>
								В сравнение
							</span>
						</div>
					</a>
				<? endforeach; ?>
			</div> <!-- /.card -->
			

		</main>
	</div> <!-- /.body__inner -->

</div> <!-- /.body -->

<!-- Script -->
<script type="text/javascript">
document.querySelectorAll('.catalog__item').forEach(function(el) {
   el.style.display = 'none';
});
</script>
