<?
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
    <link rel="stylesheet" href="/styles/test.css">
</head>
<body>
    <div class="test-place">
        <input type="hidden" id="dataName" value="Username">
        <input type="text" id="dataValue" placeholder="User name...">
        <input type="hidden" id="dataTimeType" value="m">
        <input type="hidden" id="dataTimeValue" value="30">
        <button id="registerButton">Записать имя</button>
    </div>
</body>
<script src="/scripts/cookie.js"></script>
</html>