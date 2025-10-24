<?require_once($_SERVER["DOCUMENT_ROOT"] . "/templates/tests/header.php");?>

<?
$visits = 0; 
$user = "Пользователь";
if (isset($_COOKIE["User"])) {
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
    echo "";
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

<script src="/templates/tests/scripts/registration.js"></script>

<?require_once($_SERVER["DOCUMENT_ROOT"] . "/templates/tests/footer.php");?>