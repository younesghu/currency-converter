<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/style.css">
    <title>Currency Converter</title>
</head>
<body>
    <h1>Currency Converter</h1>
    <form action="/add" method="post">
        @csrf
        <input type="text" name="amount" placeholder="Amount" required>
        {{-- @foreach ($jsonCurrencies as $jsonCurrency)
            <select name="" id="EUR">
                <option value="{{$jsonCurreny}}"></option>
            </select>
        @endforeach --}}
        <input type="text" name="from_currency" placeholder="" value="EUR">
        <input type="text" name="to_currency" placeholder="to">

        <button type="submit">Convert</button>
    </form>
    <br>
    <div>
        <table class="table">
            <tr>
                <th>
                    Amount
                </th>
                <th>
                    From
                </th>
                <th>
                    To
                </th>
                <th>
                    Result
                </th>
                <th>
                    Delete
                </th>
            </>
            @foreach ($currencyconverters as $currencyconverter)
            <tr>
                <td>
                    {{$currencyconverter['amount']}}
                </td>
                <td>
                    {{$currencyconverter['from_currency']}}
                </td>
                <td>
                    {{$currencyconverter['to_currency']}}
                </td>
                <td>
                    {{$currencyconverter['result']}}
                </td>
                <form action="/delete/{{$currencyconverter->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <td>
                        <button>x</button>
                    </td>
                </form>
            </tr>
            @endforeach
        </table>
    </div>
</body>
{{-- <script>
    var jsonData = @json($jsonCurrencies, JSON_UNESCAPED_UNICODE);
</script> --}}
</html>

