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
		<form action="" class="account">
			<div class="wrapper">
				<h2 class="account__title">Основные данные</h2>
				<label class="field">
					<input type="text" class="field__input" value="Вишнякова Анастасия Сергеевна" required>
					<span class="field__label">Фамилия, имя, отчество*</span>
				</label>
				<label class="field">
					<input type="email" class="field__input" value="jackytheawesome@gmail.co">
					<span class="field__label">E-mail*</span>
				</label>
				<div class="multifield">
					<label class="field">
						<input type="tel" class="field__input" placeholder="+7 (___)___-__-__" required size="9">
						<span class="field__label">Телефон*</span>
					</label>
					<label class="field">
						<select class="field__input">
							<option>Женский</option>
							<option>Мужской</option>
						</select>
						<span class="field__label">Пол*</span>
					</label>
				</div>
				<label class="field field--date">
					<input type="date" class="field__input">
					<span class="field__label">Дата рождения</span>
					<span class="field__message">Дату рождения можно поменять только один раз!</span>
				</label>
				<div class="account__text">
					<p>Получайте поздравления и персональные предложения от Kupalniki_i!</p>
				</div>
				<h2 class="account__title">Смена пароля</h2>
				<label class="field">
					<input type="password" class="field__input" required>
					<span class="field__label">Текущий пароль</span>
				</label>
				<label class="field">
					<input type="password" class="field__input" required>
					<span class="field__label">Новый пароль</span>
				</label>
				<label class="field">
					<input type="password" class="field__input" required>
					<span class="field__label">Повторите пароль</span>
				</label>
				<div class="account__footer">
					<div class="account__note">Нажимая на кнопку “сохранить” вы даёте согласие на <a href="">обработку персональных данных</a></div>
					<button class="btn account__btn">Сохранить</button>
				</div>
			</div>
		</form>
	</main>
<?include "footer.php";?>	