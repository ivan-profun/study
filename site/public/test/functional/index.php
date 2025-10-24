<?require_once($_SERVER["DOCUMENT_ROOT"] . "/templates/tests/header.php");?>

<div class="head">
	<h1 class="title">Страница теста функционала</h1>
	<div class="desc">Здесь находятся ссылки на тесты функционала</div>
</div>
<div class="tests">
	<div class="list">
		<div class="item">
			<a href="./test_cookie.php" class="item-link">
				<div class="head">Cookie</div>
				<div class="desc">Тестирование записи данных в куки</div>
			</a>
		</div>
		<div class="item">
			<a href="./registration.php" class="item-link">
				<div class="head">Регистрация</div>
				<div class="desc">Тестирование регистрации</div>
			</a>
		</div>
	</div>
</div>

<?require_once($_SERVER["DOCUMENT_ROOT"] . "/templates/tests/footer.php");?>