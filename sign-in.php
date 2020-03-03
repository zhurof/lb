<?include "header.php";?>		
	<main>
		<div class="breadcrumbs">
			<div class="wrapper">
				<ul class="breadcrumbs__list">
					<li><a href="/">Главная</a></li>
					<li>Вход</li>
				</ul>
			</div>
		</div>
		<form action="" class="auth-form">
			<div class="wrapper">
				<h1 class="auth-form__title">Вход</h1>
				<div class="auth-form__redirect">Ещё нет аккаунта? <a href="sign-up.php">Зарегистрироваться</a></div>
				<label class="field auth-form__field">
					<input type="email" class="field__input" required>
					<span class="field__label">E-mail или логин*</span>
				</label>
				<label class="field auth-form__field">
					<input type="password" class="field__input" required>
					<span class="field__label">Введите пароль*</span>
				</label>
				<div class="auth-form__footer">
					<a href="resore-password.php" class="auth-form__link">Забыли пароль?</a>
					<button class="btn auth-form__btn">Войти</button>
				</div>
				<div class="auth-form__social">
					<h4 class="auth-form__social-title">Вход через соцсети:</h4>
					<a href="" class="icon-instagram auth-form__social-link"></a>
					<a href="" class="icon-facebook auth-form__social-link"></a>
					<a href="" class="icon-vk auth-form__social-link"></a>
				</div>
			</div>
		</form>
	</main>
<?include "footer.php";?>	