<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
    <link rel="stylesheet" href="/styles/index.css">
</head>
<body>
    <header>
		<nav class="nav-container">
			<ul class="nav-list">
				<li class="nav-item"><a href="/" class="nav-link">Главная</a></li>
				<li class="nav-item"><a href="/test/" class="nav-link">Тесты</a></li>
			</ul>
		</nav>
	</header>
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
</body>
<script src="/scripts/index.js"></script>
<script src="/scripts/global.js"></script>
</html>