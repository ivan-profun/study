<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
</head>
<body>
    <?
        $visits = 0; 
        $message = "";
        if ($visits > 0) {
            $user = "Пользователь";
            $message = "Добро пожаловать, $user!";
        }
        else {
            $message = "Рад вас видеть в первые на этом сайте!";
        }
    ?>
    <p class="welcom-text"><?= $message ?></p>
    <? if ($visits == 0) {?>
        <button>Регистрация</button>
    <?}?>
</body>
</html>