<?
$timeTypes = [
    "y" => 365,
    "d" => 24,
    "h" => 60,
    "m" => 60,
    "s" => 1000
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $value = isset($_POST['value']) ? $_POST['value'] : '';
    $timeType = isset($_POST['timeType']) ? $_POST['timeType'] : '';
    $timeValue = isset($_POST['timeValue']) ? intval($_POST['timeValue']) : 0;

    switch ($timeType) {
        case "y":
            $timeValue *= 365 * 24 * 60 * 60;
            break;
        case "d":
            $timeValue *= 24 * 60 * 60;
            break;
        case "h":
            $timeValue *= 60 * 60;
            break;
        case "m":
            $timeValue *= 60;
            break;
        default:
            break;
    }

    setcookie($name, $value, time() + $timeValue, '/');
    echo "Cookie '{$name}' установлено со значением '{$value}' на {$timeValue} секунд.";
}
?>