<?php

namespace App\Http\Controllers;

use App\Exchange\Exchanger;
use App\Mail\Order;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;

class Controller extends BaseController
{
    public function index()
    {
        return view('index');
    }

    public function send(Request $request)
    {
        $request->validate([
            'valueFrom' => 'required|numeric',
            'typeFrom' => [
                'required',
                Rule::in([
                    'BTC',
                    'ETH',
                    'USDt (ERC-20)',
                    'USDt (TRC-20)',
                    'Альфабанк RUB',
                    'Тинькофф RUB',
                    'Сбербанк RUB',
                    'ВТБ RUB',
                ]),
            ],
            'valueTo' => 'required|numeric',
            'typeTo' => [
                'required',
                Rule::in([
                    'BTC',
                    'ETH',
                    'USDt (ERC-20)',
                    'USDt (TRC-20)',
                    'Альфабанк RUB',
                    'Тинькофф RUB',
                    'Сбербанк RUB',
                    'ВТБ RUB',
                ]),
            ],
            'wallet' => 'required|min:5',
            'firstName' => 'required|min:3',
            'phone' => 'required|min:5',
            'email' => 'required|email',
        ]);

        $details = $request->all();

        Mail::to(Config('exchange.email'))->send(new Order($details));

        return redirect()->route('home')->with('success', 'Ваша заявка принята, ожидайте звонка от оператора, среднее время ожидания 15 минут.');
    }

    public function test()
    {
        echo '<pre>';
        print_r(Exchanger::getCryptoCurrency('ETH', 'b'));
        echo '</pre>';
    }
}
