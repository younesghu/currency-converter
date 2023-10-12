<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CurrencyConverterController extends Controller
{
 //   protected $apiUrl = 'http://api.exchangeratesapi.io/v1/latest';

    public function getall()
    {
        $response = Http::get('http://api.exchangeratesapi.io/v1/latest?access_key=910504e83ebb5fc1b4eef142d91013db');

        $jsonData = $response->json();
        return $jsonData;
    }

}
