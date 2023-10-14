<!DOCTYPE html>
<html>
<head>
    <title>Currency Converter</title>
</head>
<body>
    <h1>Currency Converter</h1>
    <form action="/add" method="post">
        @csrf
        <input type="text" name="amount" placeholder="Amount" required>
        <input type="text" name="from_currency" placeholder="" value="EUR">
        <input type="text" name="to_currency" placeholder="to">

        <button type="submit">Convert</button>
        <a href="/history"> history</a>
    </form>
</body>
</html>
