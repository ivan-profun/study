<?require_once($_SERVER["DOCUMENT_ROOT"] . "/templates/tests/header.php");?>

<div class="test-place">
    <input type="hidden" id="dataName" value="Username">
    <input type="text" id="dataValue" placeholder="User name...">
    <input type="hidden" id="dataTimeType" value="m">
    <input type="hidden" id="dataTimeValue" value="30">
    <button id="registerButton">Записать имя</button>
</div>

<script src="/templates/tests/scripts/cookie.js"></script>

<?require_once($_SERVER["DOCUMENT_ROOT"] . "/templates/tests/footer.php");?>