<?include "header.php";?>		
	<main>
		<div class="breadcrumbs">
			<div class="wrapper">
				<ul class="breadcrumbs__list">
					<li><a href="/">Главная</a></li>
					<li>Забыли пароль</li>
				</ul>
			</div>
		</div>
		<form action="" class="auth-form">
			<div class="wrapper">
				<h1 class="auth-form__title auth-form__title--big-margin">Забыли пароль</h1>
				<label class="field auth-form__field">
					<input type="email" class="field__input" required>
					<span class="field__label">Введите ваш Email*</span>
				</label>
				<div class="auth-form__footer">
					<button class="btn btn--medium auth-form__btn">Восстановить пароль</button>
				</div>
				<div class="auth-form__message">Мы выслали ссылку на смену пароля на почту jackytheawesome@gmail.com , пожалуйста, проверьте вашу почту.</div>
			</div>
		</form>
	</main>
<?include "footer.php";?>	