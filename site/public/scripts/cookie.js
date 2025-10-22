document.getElementById('registerButton').onclick = function() {
	const dataName = document.getElementById('dataName').value;
	const dataValue = document.getElementById('dataValue').value;
	const dataTimeType = document.getElementById('dataTimeType').value;
	const dataTimeValue = document.getElementById('dataTimeValue').value;

	const xhr = new XMLHttpRequest();
	xhr.open('POST', '/ajax/setCookie.php', true);
	xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
	xhr.onload = function() {
		if (xhr.status === 200) {
			console.log(xhr.responseText);
		}
	};

	xhr.send(`name=${encodeURIComponent(dataName)}&value=${encodeURIComponent(dataValue)}&timeType=${encodeURIComponent(dataTimeType)}&timeValue=${encodeURIComponent(dataTimeValue)}`);
};