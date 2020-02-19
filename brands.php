<?include "header.php";?>		
	<main>
		<div class="breadcrumbs">
			<div class="wrapper">
				<ul class="breadcrumbs__list">
					<li><a href="/">Главная</a></li>
					<li>Бренды</li>
				</ul>
			</div>
		</div>
		<div class="page-head">
			<div class="wrapper">
				<h1 class="page-header__title">Бренды</h1>
			</div>
		</div>
		<div class="brands">
			<div class="wrapper">
				<div class="brands__box">
					<?for($i=0;$i<50;$i++):?>
						<div class="brand-card brand-card--small">
							<img src="img/brands/<?=$i;?>.png" alt="">
						</div>
					<?endfor;?>
				</div>
			</div>
		</div>
	</main>
<?include "footer.php";?>	