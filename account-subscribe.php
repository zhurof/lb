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
		<div class="page-head page-head--no-border">
			<div class="wrapper">
				<h1 class="page-header__title">Рассылка</h1>
				<a href="#" class="page-head__nav-link">Личный кабинет</a>
			</div>
		</div>
		<form action="" class="subscribe-form">
			<div class="wrapper">
				<label class="field subscribe-form__field">
					<input type="email" class="field__input">
					<span class="field__label">E-mail для рассылки</span>
				</label>
				<label class="classic-label classic-label--small subscribe-form__field">
					<input type="checkbox">
					<span>Я согласен получать e-mail рассылку</span>
				</label>
				<button class="btn subscribe-form__btn">Сохранить</button>
				<div class="subscribe-form__note">Нажимая на кнопку “сохранить” вы даёте согласие на <a href="#">обработку персональных данных</a></div>
			</div>
		</form>
	</main>
<?include "footer.php";?>	