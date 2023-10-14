<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Currency Exchange History</title>
</head>
<body>
    <div>
        {{-- @foreach ($currencyconverters as $currencyconverter) --}}
            <table style="border">
                <tr>
                    <th>
                        Amount
                    </th>
                    <th>
                        From Currency
                    </th>
                    <th>
                        To Currency
                    </th>
                    <th>
                        Result
                    </th>
                </tr>
                <tr>
                    <td>
                        99
                    </td>
                    <td>
                        EUR
                    </td>
                    <td>
                        USD
                    </td>
                    <td>
                        104
                    </td>
                </tr>
            </table>
        {{-- @endforeach --}}
    </div>
</body>
</html>
