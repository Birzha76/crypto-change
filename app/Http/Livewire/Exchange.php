<?php

namespace App\Http\Livewire;

use App\Exchange\Exchanger;
use Livewire\Component;

class Exchange extends Component
{
    public $typeFrom = 'BTC';

    public $valueFrom;

    public $typeTo = 'Альфабанк RUB';

    public $valueTo;

    public $result = '';

    public function render()
    {
        if (!empty($this->valueFrom)) {
            $sum = 0;
            $ok = true;

            switch ($this->typeFrom) {
                case ($this->typeFrom == 'BTC' && ($this->typeTo == 'Альфабанк RUB' || $this->typeTo == 'Тинькофф RUB' || $this->typeTo == 'Сбербанк RUB' || $this->typeTo == 'ВТБ RUB')):
                    $currencyRUB = Exchanger::getCurrencyUsdRub();
                    $currencyBTC = Exchanger::getCryptoCurrency('BTC', 'a');
                    $sum = $this->valueTo = floor($currencyBTC * $currencyRUB * $this->valueFrom);
                    break;
                case ($this->typeFrom == 'ETH' && ($this->typeTo == 'Альфабанк RUB' || $this->typeTo == 'Тинькофф RUB' || $this->typeTo == 'Сбербанк RUB' || $this->typeTo == 'ВТБ RUB')):
                    $currencyRUB = Exchanger::getCurrencyUsdRub();
                    $currencyETH = Exchanger::getCryptoCurrency('ETH', 'a');
                    $sum = $this->valueTo = floor($currencyETH * $currencyRUB * $this->valueFrom);
                    break;
                case (($this->typeFrom == 'USDt (ERC-20)' || $this->typeFrom == 'USDt (TRC-20)') && ($this->typeTo == 'Альфабанк RUB' || $this->typeTo == 'Тинькофф RUB' || $this->typeTo == 'Сбербанк RUB' || $this->typeTo == 'ВТБ RUB')):
                    $currencyRUB = Exchanger::getCurrencyUsdRub();
                    $sum = $this->valueTo = floor($currencyRUB * $this->valueFrom);
                    break;
                case (($this->typeFrom == 'Альфабанк RUB' || $this->typeFrom == 'Тинькофф RUB' || $this->typeFrom == 'Сбербанк RUB' || $this->typeFrom == 'ВТБ RUB') && $this->typeTo == 'BTC'):
                    $currencyRUB = Exchanger::getCurrencyUsdRub();
                    $currencyBTC = Exchanger::getCryptoCurrency('BTC', 'a');
                    $sum = $this->valueTo = number_format(($this->valueFrom / $currencyRUB) / $currencyBTC, 10, '.', '');
                    break;
                case (($this->typeFrom == 'Альфабанк RUB' || $this->typeFrom == 'Тинькофф RUB' || $this->typeFrom == 'Сбербанк RUB' || $this->typeFrom == 'ВТБ RUB') && $this->typeTo == 'ETH'):
                    $currencyRUB = Exchanger::getCurrencyUsdRub();
                    $currencyBTC = Exchanger::getCryptoCurrency('ETH', 'a');
                    $sum = $this->valueTo = number_format(($this->valueFrom / $currencyRUB) / $currencyBTC, 10, '.', '');
                    break;
                case (($this->typeFrom == 'Альфабанк RUB' || $this->typeFrom == 'Тинькофф RUB' || $this->typeFrom == 'Сбербанк RUB' || $this->typeFrom == 'ВТБ RUB') && ($this->typeTo == 'USDt (ERC-20)' || $this->typeTo == 'USDt (TRC-20)')):
                    $currencyRUB = Exchanger::getCurrencyUsdRub();
                    $sum = $this->valueTo = number_format(($this->valueFrom / $currencyRUB), 2, '.', '');
                    break;
                default:
                    $this->valueTo = null;
                    $ok = false;
            }

            if ($ok) {
                $str = 'Переводим ' . $this->valueFrom . ' ' . $this->typeFrom . '.
            Вы получите - ' . $sum . ' ' . $this->typeTo;
            }else {
                $str = 'Данное направление обмена не поддерживается.';
            }

            $this->result = $str;
        }

        return view('livewire.exchange');
    }
}
