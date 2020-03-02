<?include "header.php";?>		
	<main>
		<div class="breadcrumbs">
			<div class="wrapper">
				<ul class="breadcrumbs__list">
					<li><a href="/">Главная</a></li>
					<li><a href="">Личный кабинет</a></li>
					<li>Личные данные</li>
				</ul>
			</div>
		</div>
		<div class="page-head">
			<div class="wrapper">
				<h1 class="page-header__title">Личные данные</h1>
				<a href="#" class="page-head__nav-link">Личный кабинет</a>
			</div>
		</div>
		<div class="address">
			<div class="wrapper">
				<div class="address__list">
					<div class="address__item">
						<h3 class="address__item-title">Дом</h3>
						<div class="address__item-text">Россия, Республика Башкортостан г. Уфа, ул. Интернациональная, 197/23 кв. 689</div>
						<div class="address__item-footer">
							<span class="address__item-tool">Редактировать</span>
							<span class="address__item-tool">Удалить</span>
						</div>
					</div>
					<div class="address__item">
						<h3 class="address__item-title">Офис</h3>
						<div class="address__item-text">Россия, Республика Башкортостан г. Уфа, ул. Интернациональная, 197/23 кв. 689</div>
						<div class="address__item-footer">
							<span class="address__item-tool">Редактировать</span>
							<span class="address__item-tool">Удалить</span>
						</div>
					</div>
				</div>
				<div class="address__add-btn">+ Добавить адрес</div>
				<form action="" class="address__form">
					<h2 class="address__title">Добавление адреса</h2>
					<label class="field">
						<input type="text" class="field__input" value="Название адреса" required>
					</label>
					<label class="field">
						<select class="field__input">
							<option>Россия</option>
							<option>Казахстан</option>
						</select>
						<span class="field__label">Страна</span>
					</label>
					<label class="field">
						<input type="text" class="field__input" value="450104" required>
						<span class="field__label">Индекс</span>
					</label>
					<label class="field">
						<input type="text" class="field__input">
						<span class="field__label">Регион</span>
					</label>
					<label class="field">
						<input type="text" class="field__input">
						<span class="field__label">Населенный пункт</span>
					</label>
					<label class="field">
						<input type="text" class="field__input">
						<span class="field__label">Улица</span>
					</label>
					<div class="double-field">
						<label class="field">
							<input type="text" class="field__input">
							<span class="field__label">Дом</span>
						</label>
						<label class="field">
							<input type="text" class="field__input">
							<span class="field__label">Квартира/Офис</span>
						</label>
					</div>
					<div class="address__footer">
						<div class="address__remove-btn">Удалить</div>
						<button class="btn address__btn">Сохранить</button>
					</div>
				</form>
			</div>
		</div>
	</main>
<?include "footer.php";?>	