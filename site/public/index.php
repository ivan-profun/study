<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
    <link rel="stylesheet" href="/styles/global.css">
    <link rel="stylesheet" href="/styles/index.css">
</head>
<body>
    <header>
        <div class="top">
            <nav class="nav-container">
                <ul class="nav-list">
                    <li class="nav-item"><a href="/" class="nav-link">Главная</a></li>
                    <li class="nav-item"><a href="/test/" class="nav-link">Тесты</a></li>
                </ul>
            </nav>
        </div>
	</header>
    <main>
        <?
            $visits = 0; 
            $user = "Пользователь";
            if (isset($_COOKIE["user"])) {
                $visits++;
                $parts = explode(';', $_COOKIE["user"]);
                $result = [];
                foreach ($parts as $part) {
                    list($key, $value) = explode('=', $part);
                    $result[trim($key)] = trim($value);
                }
                $user = $result["name"];
                $visits+=int($result["visits_number"]);
            }
            else {
                $cookie_set_value = "name=User;visits_number=1";
                echo "<script>myJSFunction();</script>";
            }
            $message = "";
            if ($visits > 0) {
                $message = "Добро пожаловать, $user!";
            }
            else {
                $message = "Рад вас видеть в первые на этом сайте!";
            }
        ?>
        <p class="welcom-text"><?= $message ?></p>
        <? if ($visits == 0) {?>
            <button>Регистрация</button>
        <?}else{?>
            <button>Вход</button>
        <?}?>
    </main>
    <footer>
		<div class="top">
			<div class="logo-block">
				<div class="logo">
					<a href="/">
						<div class="logo-text">
							Тут могло быть<br>
							моё лого
						</div>
					</a>
				</div>
			</div>
			<nav class="nav-container">
				<ul class="nav-list">
					<li class="nav-item"><a class="nav-title">Навигация по сайту</a></li>
					<li class="nav-item"><a href="/" class="nav-link">Главная</a></li>
				</ul>
				<ul class="nav-list">
					<li class="nav-item"><a class="nav-title">Навигация по тестам</a></li>
					<li class="nav-item"><a href="/test/" class="nav-link">Главная</a></li>
					<li class="nav-item"><a href="/test/functional/" class="nav-link">Функционал</a></li>
				</ul>
			</nav>
		</div>
		<div class="bottom">
			<div class="copyright">
				Made in Russian
			</div>
			<div class="sitemap">
				Карты сайта пока нет!
			</div>
		</div>
	</footer>
</body>
<script src="/scripts/index.js"></script>
<script src="/scripts/global.js"></script>
</html>