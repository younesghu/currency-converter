<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CurrencyConverterController extends Controller
{
    protected $apiUrl = 'http://api.exchangeratesapi.io/v1/latest';

    public function index()
    {
        return view('currency-converter');
    }

    public function convert(Request $request)
    {
        $amount = $request->input('amount');
        $fromCurrency = $request->input('from_currency');
        $toCurrency = $request->input('to_currency');

        $response = Http::get($this->apiUrl, [
            'api_key' => config('910504e83ebb5fc1b4eef142d91013db'),
            'from' => $fromCurrency,
            'to' => $toCurrency,
        ]);

        $data = $response->json();

        if ($data['success']) {
            $conversionRate = $data['rates'][$toCurrency];
            $result = $amount * $conversionRate;
        } else {
            $result = 'Error fetching data';
        }

        return view('currency-converter', compact('result'));
    }
}
