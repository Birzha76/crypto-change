<?php

namespace App\Exchange;

use Illuminate\Support\Facades\Http;

class Exchanger
{
    public static function getCurrencyUsdRub()
    {
        $apikey = Config('exchange.currencyApi');

        $from_Currency = urlencode('USD');
        $to_Currency = urlencode('RUB');
        $query =  "{$from_Currency}_{$to_Currency}";

        $json = Http::get("https://free.currconv.com/api/v7/convert?q={$query}&compact=ultra&apiKey={$apikey}");
        $obj = $json->json();

        $val = floatval($obj["$query"]);

        $total = $val * 1;
        return number_format($total, 2, '.', '');
    }

    public static function getCryptoCurrency($coin, $type)
    {
        $json = Http::get("https://api.kraken.com/0/public/Ticker?pair=" . $coin . "USD");
        $obj = $json->json();

        switch ($type)
        {
            case ($type == 'a' && $coin == 'BTC'):
                $result = $obj['result']['XXBTZUSD']['a'][0] ?? null;
                break;
            case ($type == 'b' && $coin == 'BTC'):
                $result = $obj['result']['XXBTZUSD']['b'][0] ?? null;
                break;
            case ($type == 'a' && $coin == 'ETH'):
                $result = $obj['result']['XETHZUSD']['a'][0] ?? null;
                break;
            case ($type == 'b' && $coin == 'ETH'):
                $result = $obj['result']['XETHZUSD']['b'][0] ?? null;
                break;
            default:
                $result = null;
        }

        return $result;
    }
}
