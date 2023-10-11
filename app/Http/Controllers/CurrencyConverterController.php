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

}
