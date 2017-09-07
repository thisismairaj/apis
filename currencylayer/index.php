<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CurrencyLayer API</title>
</head>
<body>

<form action="post">
	<select name="from">
		<option value="usd" data-currencyFrom="usd">USD</option>
		<option value="btc" data-currencyFrom="btc" selected>BTC</option>
	</select>
	<select name="to">
		<option value="" data-currencyTo="pkr">PKR</option>
		<option value="" data-currencyTo="inr">INR</option>
	</select>
	<input type="submit" name="submit">
</form>

<p id="result"></p>

<script>

	const access_key = 'XYZ';
	const url = 'http://www.apilayer.net/api/live?access_key=' + access_key +'&format=1';
	// const inputPassed = document.querySelector(`option[data-currencyFrom="usd"]`);

	// const fromdata = inputPassed.getAttribute('data-currencyFrom');

	// console.log(inputPassed);

		fetch(url)
			.then(data => data.json())
			.then(data => {
				const PKRrate = data.quotes.USDPKR;
				const selector = document.querySelector(`option[selected]`);

				console.log(selector);

				// const result = document.querySelector(`p#result`);

				// const calculate = from * PKRrate;

				// console.log(calculate);

			});

</script>	
</body>
</html>