<?include "header.php";?>		
	<main>
		<div class="breadcrumbs">
			<div class="wrapper">
				<ul class="breadcrumbs__list">
					<li><a href="/">Главная</a></li>
					<li>Регистрация</li>
				</ul>
			</div>
		</div>
		<form action="" class="auth-form">
			<div class="wrapper">
				<h1 class="auth-form__title">Регистрация</h1>
				<div class="auth-form__redirect">Уже зарегистрированы? <a href="sign-in.php">Войти</a></div>
				<label class="field auth-form__field">
					<input type="text" class="field__input" required>
					<span class="field__label">Фамилия, имя, отчество*</span>
				</label>
				<label class="field auth-form__field">
					<input type="email" class="field__input" required style="z-index: 1;">
					<span class="field__label">E-mail или логин*</span>
					<span class="hint field__hint">
						<span class="hint__text">Это ваш логин. Мы используем его для уведомлений и оформления заказа</span>
						<span class="hint__example">Например: <em>yourname@domain.zo</em></span>
					</span>
				</label>
				<label class="field auth-form__field">
					<input type="password" class="field__input" required>
					<span class="field__label">Введите пароль*</span>
				</label>
				<label class="field auth-form__field">
					<input type="password" class="field__input" required>
					<span class="field__label">Повторите пароль*</span>
				</label>
				<div class="auth-form__footer">
					<button class="btn btn--block auth-form__btn">Зарегистрироваться</button>
				</div>
				<div class="auth-form__note">Нажимая на кнопку зарегистрироватья вы принимаете условия <a href="#">политики конфиденциальности</a></div>
				<div class="auth-form__social">
					<h4 class="auth-form__social-title">Регистрация через соцсети:</h4>
					<a href="" class="icon-instagram auth-form__social-link"></a>
					<a href="" class="icon-facebook auth-form__social-link"></a>
					<a href="" class="icon-vk auth-form__social-link"></a>
				</div>
			</div>
		</form>
		<!--Затемнение для подсказки-->
		<div class="hint-layout"></div>
	</main>
<?include "footer.php";?>	