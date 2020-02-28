<?include "header.php";?>		
	<main>
		<div class="breadcrumbs">
			<div class="wrapper">
				<ul class="breadcrumbs__list">
					<li><a href="/">Главная</a></li>
					<li><a href="basket.php">Корзина</a></li>
					<li>Оформление заказа</li>
				</ul>
			</div>
		</div>
		<div class="page-head">
			<div class="wrapper">
				<h1 class="page-header__title">Оформление заказа</h1>
				<a href="basket.php" class="page-head__nav-link page-head__nav-link--back">Назад в корзину</a>
			</div>
		</div>
		<div class="breadcrumbs breadcrumbs--big">
			<div class="wrapper">
				<ul class="breadcrumbs__list">
					<li class="active">Способ получения</li>
					<li><a href="#">Подтверждение</a></li>
				</ul>					
			</div>				
		</div>
		<div class="delivery">
			<div class="wrapper">
				<h2 class="delivery__title">Способ получения</h2>
				<select class="delivery__select">
					<option>Доставка</option>
					<option>Самовывоз</option>
				</select>
				<h3 class="delivery__subtitle">Выберите адрес доставки или добавьте новый адрес</h3>
				<label class="delivery__option">
					<input type="radio" name="address" value="Дом" class="delivery__option-input">
					<span class="delivery__option-text">
						Дом 
						<span class="delivery__option-description">Россия, Республика Башкортостан г.&nbsp;Уфа, ул. Интернациональная, 197/23 кв. 689</span>
					</span>
				</label>
				<label class="delivery__option">
					<input type="radio" name="address" value="office" class="delivery__option-input">
					<span class="delivery__option-text">
						Офис 
						<span class="delivery__option-description">Россия, Республика Башкортостан г.&nbsp;Уфа, ул. Интернациональная, 197/23 кв. 689</span>
					</span>
				</label>
				<div class="delivery__add-btn">+ Добавить адрес</div>
				<h3 class="delivery__subtitle">Выберите способ доставки</h3>
				<label class="delivery__option">
					<input type="radio" name="delivery" value="post" class="delivery__option-input">
					<span class="delivery__option-text">
						Почта России
						<span class="delivery__option-hint">До бесплатной доставки осталось 300 ₽</span>
					</span>
				</label>
				<label class="delivery__option">
					<input type="radio" name="delivery" value="post" class="delivery__option-input">
					<span class="delivery__option-text">
						Курьерская доставка без примерки
						<span class="delivery__option-hint">До бесплатной доставки осталось 1000 ₽</span>
					</span>
				</label>
				<label class="delivery__option delivery__option--short">
					<input type="radio" name="delivery" value="post" class="delivery__option-input">
					<span class="delivery__option-text">
						Курьерская доставка с примеркой
						<span class="delivery__option-hint">На примерку можно заказать не более 5 позиций</span>
					</span>
				</label>
			</div>
		</div>
		
		<div class="order-block">
			<div class="wrapper">
				<table class="order-block__total">
					<tfoot>
						<tr>
							<td>Товаров на сумму:</td>
							<td class="order-block__total-price">92 900 ₽</td>
						</tr>
					</tfoot>
					<tbody>
						<tr>
							<td>Сумма корзины:</td>
							<td>92 900 ₽</td>
						</tr>
						<tr>
							<td>Персональная скидка:</td>
							<td>-9 100 ₽</td>
						</tr>
						<tr>
							<td>Доставка курьером</td>
							<td>1 000 ₽</td>
						</tr>
					</tbody>
				</table>
				<div class="order-block__buttons">
					<a href="" class="btn btn--white order-block__btn order-block__btn--back">Назад</a>
					<a href="" class="btn btn--next order-block__btn">Продолжить</a>
				</div>
			</div>
		</div>
	</main>
<?include "footer.php";?>	