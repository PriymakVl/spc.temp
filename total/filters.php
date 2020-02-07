<?php 
$number = 1;
$types = ['Блок подготовки', 'Фильтр регулятор', 'Регулятор', 'Фильтр'];
$push = ['0 - 6', '0 - 8', '0 - 10'];

 ?>

<div class="filters">
	<div class="filters__header">Параметры выбора</div>
	<form action="get" class="filters__form">

		<!-- Filter -->
		<div class="filter">
			<div class="filter__name">
				Тип устройства
				<i class="fas fa-angle-down filter__triangel"></i>
			</div>
			<div class="filter__content">
				<? foreach ($types as $type): ?>
					<div class="filter__item">
						<input type="checkbox" name="#" id="<?='type'.$number?>">
						<label for="<?='type'.$number?>"><?=$type?></label>
					</div>
					<?$number++;?>
				<? endforeach; ?>
			</div>
		</div>

		<!-- Filter -->
		<div class="filter">
			<div class="filter__name">
				Рабочее давление, бар
				<i class="fas fa-angle-down filter__triangel"></i>
			</div>
			<div class="filter__content">
				<? foreach ($push as $item): ?>
					<div class="filter__item">
						<input type="checkbox" name="#" id="<?='push'.$number?>">
						<label class="filter--num" for="<?='push'.$number?>"><?=$item?></label>
					</div>
					<?$number++;?>
				<? endforeach; ?>
			</div>
		</div>

	</form>
</div>