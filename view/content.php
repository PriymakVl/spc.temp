<?php 

 ?>

<!-- Main -->
<div class="body">
	
	<? include 'total/sidebar.php'; ?>

	<div class="body__inner">
		<main class="content">
			
			<? include 'total/breadcrumbs.php' ?>

			<!-- Product -->
			<div class="product">
				<!-- Product Gallery -->
				<div class="product__gallery">
					<div class="product__img">
						<img src="assets/img/cat_cn.jpg" alt="">
					</div>
					<div class="product__trumb">
						<img src="assets/img/cat_cn.jpg" alt="">
						<img src="assets/img/cat_cu.jpg" alt="">
						<img src="assets/img/cat_fn.jpg" alt="">
					</div>
				</div> <!-- /.product__g -->

				<div class="product__content">
					<h1 class="product__name">Блок подготовки воздуха SA-CN20-08</h1>

					<div class="product__content-inner">
						<!-- Product Panel -->
						<div class="product__panel">

							<!-- Product Cart Block -->
							<div class="product__cart-block">
								<div class="product__counter-block">
									<span>-</span>
									<input type="text" name="" id="" value="1">
									<span>+</span>
								</div>
								<button class="product__cart-btn" type="submit" >
									<i class="fas fa-cart-plus product__cart-icon"></i>
									В корзину
								</button> 
		<!-- 						<span class="product__buy-click">Купить в 1 клик</span>
								<span class="product__custom-compare">
									<i class="far fa-chart-bar"></i>
									В сравнение
								</span> -->
							</div> <!-- /.product__cart-block -->
						</div> <!-- /.product__panel -->

						<!-- Product Sidebar -->
						<div class="product__sidebar"></div>
					</div> <!-- /.product__content-inner -->
				</div> <!-- /.product__content -->
						
			</div> <!-- /.product -->



		</main>
	</div> <!-- /.body__inner -->

</div> <!-- /.body -->

<!-- Script -->
<script type="text/javascript">
document.querySelectorAll('.catalog__item').forEach(function(el) {
   el.style.display = 'none';
});
</script>
